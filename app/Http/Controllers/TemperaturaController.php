<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Helper\ConverterHelper;

class TemperaturaController extends Controller
{
    /**
     * Muestra el formulario para convertir de centigrados
     * a Farenheit
     */
    public function index() {
        return view("cent2farForm");
    }

    /**
     * Muestra el formulario para convertir de centigrados
     * a Kelvin
     */
    public function centigradosAKelvin(){
        return view("cent2kelForm");
    }

    /**
     * Muestra el formulario para calcular la 
     * diferencia positiva de dos temperaturas validas
     */
    public function diferencia() {
        

        return view("diferenciaForm");
    }


    /**
     * Calcular la conversion de centigrados a Farenheit
     */
    public function centigradosAFarenheitConvertir(Request $request) {

        $request->validate([
            "centigrados"=>"numeric|min:-273.15",
        ]);
        
        $centigrados = $request->input("centigrados");
        // TODO  validar que sea numerico y mayor a 273.15


        $farenheit = ConverterHelper::centigradosAFarenheit($centigrados);

        return view("cent2farForm")->with("farenheit",$farenheit);
    }

    /**
     * Calcular la convesion de centigrados a Kelvin
     */
    public function centigradosAKelvinConvertir() {
        // TODO conversion
    }

    /**
     * Calcular la diferencia de 2 temperaturas
     */
    public function diferenciaCalcular() {
        //TODO 
    }
    
}
