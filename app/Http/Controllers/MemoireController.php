<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoireController extends Controller
{
    public static $memoires = [
    ["id"=>"1", "theme"=>"Prototype d'une application mobile", "option"=>"Génie Logiciel", "fichier"=>"memoire1.pdf"],
    ["id"=>"2", "theme"=>"Prototype d'une application web", "option"=>"Génie Logiciel", "fichier"=>"memoire2.pdf"],
    ["id"=>"3", "theme"=>"Développement d'une plateforme web éducative", "option"=>"Internet et Multimédia", "fichier"=>"memoire3.pdf"],
    ["id"=>"1", "theme"=>"Mise en place d'un système de sécurité", "option"=>"Sécurité Informatique", "fichier"=>"memoire4.pdf"]
    ];

    public function index(){
           $viewData = [];
           $viewData["title"] = "Mémoires - Plateforme E-mémoire";
           $viewData["subtitle"]  = "Liste des mémoires";
           $viewData["memoires"] = MemoireController::$memoires;
           return view('memoire.index')->with("viewData", $viewData);
    }

    public function show($id){
        $viewData = [];
        $memoire = MemoireController::$memoires[$id-1];
        $viewData["title"] = $memoire["name"]." - Plateforme E-mémoire";
        $viewData["subtitle"] = $memoire["name"]." - Mémoire Information";
        $viewData["memoire"] = $memoire;
        return view('memoire.show')->with("viewData", $viewData);
    }
}
