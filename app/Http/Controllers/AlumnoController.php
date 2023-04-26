<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alumnos = Alumno::paginate(10);
        return view("alumnos.index")->with("alumnos", $alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("alumnos.createForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
           "nombre" => 'required|regex:/[a-zA-Z áéíóúñ]+/i|min:3',
           "edad" => 'required|numeric|min:0|max:100',
           "identidad" => 'required|regex:/[0-9]{13}/|unique:alumnos,identidad',
           "direccion" => 'required',
        ]);

        $alumno = new Alumno();
        $alumno->nombre = $request->input("nombre");
        $alumno->edad = $request->input("edad");
        $alumno->identidad = $request->input("identidad");
        $alumno->direccion = $request->input("direccion");

        if ($alumno->save() ) {
            return redirect()->route("alumnos.index")->with('mensaje', 'Nuevo alumno creado exitosamente.');
        } else {
            return back();
        };


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view("alumnos.show")->with("alumno", $alumno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //


        $alumno = Alumno::findOrFail($id);
        return view("alumnos.createForm")->with("alumno", $alumno);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $alumno = Alumno::findOrFail($id);


        $request->validate([
            "nombre" => 'required|regex:/[a-zA-Z áéíóúñ]+/i|min:3',
            "edad" => 'required|numeric|min:0|max:100',
            "identidad" => 'required|regex:/[0-9]{4}-[0-9]{4}-[0-9]{5}/',
            "direccion" => 'required',
        ]);


        $alumno->nombre = $request->input("nombre");
        $alumno->edad = $request->input("edad");
        $alumno->identidad = $request->input("identidad");
        $alumno->direccion = $request->input("direccion");

        if ($alumno->save() ) {
            return redirect()->route("alumnos.index")->with('mensaje', 'Se actualizó el alumno '. $alumno->nombre);
        } else {
            return back();
        };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Alumno::destroy($id) > 0 ) {
            return redirect()->route("alumnos.index")->with('mensaje', 'Se eliminó el alumno');
        } else {
            return back();
        };
    }
}
