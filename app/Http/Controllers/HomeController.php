<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $usuario = "JorgeMendes";
        $perfil = "Dev";
        $empresa = "jljmcode";

        return view('home');
    }
}
