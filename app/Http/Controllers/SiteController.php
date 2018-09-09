<?php

namespace App\Http\Controllers;

use App\Models\Page;

class SiteController extends Controller
{
    public function index($url = "")
    {
        $pages = Page::oldest("position")->get();

        switch ($url) {
            case(""):
                $view ="home";
                break;
            case("uslugi"):
                $view ="services";
                break;
            case("novosti"):
                $view = "articles";
                break;
            case("o-nas"):
                $view = "about";
                break;
            case("kontakty"):
                $view = "contacts";

        }
        return view($view, compact("pages"));
    }
}
