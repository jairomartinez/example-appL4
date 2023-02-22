<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function centigradosAFarenheitConvertir() {
        // TODO convertir y mostrar la vista
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
