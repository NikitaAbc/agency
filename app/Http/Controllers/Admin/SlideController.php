<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use Image;

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
        ]);
    }

    public function update(Request $request)
    {

    }
}

