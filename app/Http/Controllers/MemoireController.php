<?php

namespace App\Http\Controllers;

use App\Models\Memoire;
use Illuminate\Http\Request;

class MemoireController extends Controller
{

    public function index(){
           $viewData = [];
           $viewData["title"] = "Mémoires - Plateforme E-mémoire";
           $viewData["subtitle"]  = "Liste des mémoires";
           $viewData["memoires"] = Memoire::all();
           return view('memoire.index')->with("viewData", $viewData);
    }

    public function show($id){
        $viewData = [];
        $memoire = Memoire::findOrFail($id);
        $viewData["title"] = $memoire->getTheme()." - Plateforme E-mémoire";
        $viewData["subtitle"] = $memoire->getTheme()." - Mémoire Information";
        $viewData["memoire"] = $memoire;
        return view('memoire.show')->with("viewData", $viewData);
    }
}
