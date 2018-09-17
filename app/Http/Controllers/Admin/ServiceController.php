<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Image;
use File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.service.index", [
            "services"=>Service::oldest("position")->get(),

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.service.create");
    }

    private function getImage($request)
    {
        $filename = time() . '.' . $request->file("image")->getClientOriginalExtension();

        if ($request->hasFile("image")) {

            $img = Image::make($request->file("image"));

            $img->resize(300, 300)->save(public_path('img/services/' . $filename));
        }

        return $filename;
    }

    private function unlinkImage($link)
    {

        if(File::exists($link)) {
            File::delete($link);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $this->reposition();

        $counter = Service::all()->count();

        Service::create([
            "title"=>$request->title,
            "route"=>"",
            "text"=>$request->text,
            "image"=>$this->getImage($request),
            "footer_text"=>$request->footer_text,
            "tag_title"=>$request->tag_title,
            "position"=> ++$counter,
        ]);

        return redirect()->route("admin.services.index")
            ->withSuccess("Вы успешно добавили услуги");
    }

    private function reposition()
    {
        $services = Service::oldest("position")->get();

        $counter = 0;

        foreach ($services as $service)
        {
            $counter++;

            $service->position = $counter;

            $service->save();
        }

    }

    public function store(Request $request)
    {

        $service = Service::find($request->id);
        $prevService = Service::find($request->prevId);

        if($service->position>1) {
            if ($request->action == "up") {
                $service->position--;
                $prevService->position++;

            }
        }
        if($service->position>=1){
            if($request->action == "down") {
                $service->position++;
                $prevService->position--;

            }
        }

        $service->update([
            "position"=>$service->position,

        ]);

        $prevService->update([
            "position"=>$prevService->position,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($route)
    {
        return view("admin.service.edit",[
            "service"=> Service::where("route",$route)->first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $route)
    {

        Service::where("route", $route)->first()
                                       ->update($request->all());


        return redirect()->route("admin.services.index")
            ->withSuccess("Вы успешно изменили услуги");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove(Request $request)
    {
        $serviceId = Service::find($request->id);

        $filePath = public_path("img/services/" . $serviceId->image);

        $serviceId->delete();
        $this->reposition();

        $this->unlinkImage($filePath); //Удаление изображения с папки


    }
}
