<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{

    public function index()
    {
        return view("admin.article.index", [
            "articles" => Article::latest()->paginate(8),
            "count"=> Article::all()->count(),
        ]);
    }


    public function create()
    {
        return view("admin.article.create");
    }

    public function add(Request $request)
    {
        Article::create($request->all());

        return redirect()->route("admin.articles.index")
                         ->withSuccess("Вы успешно добавили статью");

    }

    public function show($route)
    {
        $article = Article::where("route", $route)->first();

        return view("admin.article.show", compact("article"));
    }


    public function update(Request $request, $route)
    {
        Article::updateOrCreate([
            "route" => $route
        ],$request->all());

        return redirect()->route("admin.articles.index")
                         ->withSuccess("Вы успешно обновили статью");
    }


    public function destroy(Request $request)
    {
        Article::where("title", $request->title)->delete();
    }
}
