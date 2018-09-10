<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Contact;
use App\Models\Article;

class SiteController extends Controller
{
    public function index($url = "")
    {
        $pages = Page::oldest("position")->get();

        $result=[
          'contacts'=>Contact::first(),
        ];

        switch ($url) {
            case(""):
                $view ="home";
                break;
            case("uslugi"):
                $view ="services";
                break;
            case("novosti"):
                $view = "articles";
                $result+=[
                    'articles'=>Article::latest()->get(),
                ];
                break;
            case("o-nas"):
                $view = "about";
                break;
            case("kontakty"):
                $view = "contacts";

        }

        $result+=[
            'pages'=>$pages,
            'page'=>$view,
        ];

        return view($view, $result);
    }
}
