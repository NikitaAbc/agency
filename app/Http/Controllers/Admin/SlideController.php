<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use Image;
use Storage;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all();

        return view("admin.slide.index",compact("slides"));
    }

    public function edit(Request $request)
    {
        $filename = time() . '.' . $request->file('file')->getClientOriginalExtension();

        $img = Image::make($request->file("file"));

        $img->resize(300, 300)->save(public_path('img/temp/' . $filename));

        return view("admin.slide.edit", [
            "file"=>$filename,
            "slide_id"=>$request->slide_id,

        ]);
    }

    public function store(Request $request)
    {
        $width = ($request->x2 - $request->x1);
        $height = ($request->y2 - $request->y1);

        $img = Image::make(public_path('/img/temp/'.$request->file_name));

        $img->crop($width, $height, $request->x1, $request->y1)->resize(1920,600)->save(public_path('img/slides/' . $request->file_name));

        Slide::find($request->slide_id)->update(["image"=>$request->file_name]);

        return redirect()->route("admin.slides.index");
    }
}

