<?php

namespace App\Http\Controllers\Admin;

use App\Models\Memoire;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMemoireController extends Controller
{
    public function index(){
        $viewData = [];
        $viewData["title"] = "AdminPage - Memoires";
        $viewData["memoires"] = Memoire::all();
        return view('admin.memoire.index')->with("viewData", $viewData);
    }
}
