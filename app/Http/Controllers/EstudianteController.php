<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //

    public function harold(){
        $estudiantes = Estudiante::all();
        return view('estudiantesIndex')->with('estudiantes', $estudiantes);
    }
}
