<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index() {}
    public function show($id) {}
    public function create() {}
    public function edit($id) {}
    public function categorias($categoria) {}


    public function sumaenteros() {
        $numero = $_POST['numero'];

        $suma = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $suma += $i;
        }

        //// Aqui escribir la suma
        echo $suma;

    }
}
