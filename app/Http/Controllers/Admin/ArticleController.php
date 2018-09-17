<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Image;
use File;


class ArticleController extends Controller
{

    public function index()
    {
        return view("admin.article.index", [
            "articles" => Article::latest()->paginate(6),
            "count"=> Article::all()->count(),
        ]);
    }


    public function create()
    {
        return view("admin.article.create");
    }

    public function add(Request $request)
    {
        $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();

        Article::create([
            "title"=>$request->title,
            "text"=>$request->text,
            "image"=>$filename,
            "footer_text"=>$request->footer_text,
        ]);

        if ($request->hasFile('image')) {

            $img = Image::make($request->file("image"));

            $img->resize(300, 300)->save(public_path('img/articles/' . $filename));
        }

        return redirect()->route("admin.articles.index")
                         ->withSuccess("Вы успешно добавили статью");

    }

    public function show($route)
    {
        $article = Article::where("route", $route)->first();

        return view("admin.article.show", compact("article"));
    }

    private function unlinkImage($link)
    {

        if(File::exists($link)) {
            File::delete($link);
        }
    }


    public function update(Request $request, $route)
    {

        $currentImage = Article::where("route",$route)->first()->image;

        $filePath = public_path("img/articles/");

        if ($request->hasFile('image')) {

            $filename = time() . '.' . $request->file('image')->getClientOriginalExtension();

            $img = Image::make($request->file("image"));

            $img->resize(300, 300)->save($filePath . $filename);

            $this->unlinkImage($filePath . $currentImage);

        } else {
            $filename = $currentImage;
        }

        Article::where("route", $route)->update([
            "title"=>$request->title,
            "text"=>$request->text,
            "image"=>$filename,
            "footer_text"=>$request->footer_text,
        ]);

        return redirect()->route("admin.articles.index")
                         ->withSuccess("Вы успешно обновили статью");
    }


    public function destroy(Request $request)
    {
        $articleId = Article::find($request->id);

        $filePath = public_path("img/articles/" . $articleId->image);

        $articleId->delete();
        $this->unlinkImage($filePath);
    }
}
