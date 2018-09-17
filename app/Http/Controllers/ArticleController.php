<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($route)
    {
        $pages = Page::oldest("position")->get();
        $articles = Article::latest();
        $view = "article.show";
        $article = Article::where("route",$route)->first();

        $result=[
            'contact'=>Contact::first(),
            'services'=> Service::latest()->get(),
            'pages'=>$pages,
            'articles'=>$articles->take(3)->get(),
            'page' => $pages->where("route", "uslugi")->first(),
            'view'=>$view,
            'article'=>$article
        ];

        if($route == "novosti")
        {
            $result+=[
                "articles_paginate"=>$articles->paginate(9),
            ];
        }

        return view($view, $result);
    }
}
