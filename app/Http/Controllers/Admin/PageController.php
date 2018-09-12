<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.page.index",[
            "pages"=>Page::oldest("position")->get(),
        ]);
    }

    public function update(Request $request)
    {
        $page = Page::find($request->id);
        $prevPage = Page::find($request->prevId);


            if ($request->action == "up") {
                $page->position--;
                $prevPage->position++;

            }
        if($request->action == "down") {
                $page->position++;
                $prevPage->position--;

            }

        $page->update([
            "position"=>$page->position,

        ]);

        $prevPage->update([
            "position"=>$prevPage->position,
        ]);
    }
}
