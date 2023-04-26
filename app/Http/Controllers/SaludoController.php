<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    //

    public function index($nombre = "Fulano")
    {
        // Recuperar datos de tabla. 
        return view("hola")->with("nombre", $nombre);
    }

    public function show()
    {
        return "show";
    }

    public function edit($carrera) {
        return "Carrera: ".$carrera;

    }
}
