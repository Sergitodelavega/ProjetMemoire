<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Platform E-mémoire";
        return view('home.index')->with("viewData", $viewData);
    }

    public function about()
    {
        $viewData["title"]= "About us - Platform E-mémoire";
        $viewData["subtitle"]= "About us";
        $viewData["description"] = "This is an about page";
        $viewData["author"] = "Developed by : Sergio Lissanou";
        return view('home.about')->with("viewData", $viewData);
    }
}
