<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller{

    public function index(){
        $nombre = "Pablo";
        $edad = 18;
        return view('miVista', ['nombre'=>$nombre,'edad'=>$edad]);
    }
}
