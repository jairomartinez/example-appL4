<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperaturaController;
use App\Http\Controllers\SaludoController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\EstudianteController;

use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/**
 * Rutas controlados por SaludoController.
 */
Route::controller(SaludoController::class)->group(function(){
    Route::prefix("/saludo")->group(function(){
        Route::get('/show', "show")->name("saludo.show");
        Route::get('/carrera/{carrera}', "edit")->whereIn('carrera', ["informatica", "agro", "enfermeria"]);

        Route::get('/{nombre?}', "index")->name("saludo.index")->whereAlpha("nombre");

    });
});

Route::get("/placa/{placa}", function($placa) {
    return "numero de placa ". $placa;
})->where("placa", "[A-Z]{3}[0-9]{4}");



Route::resource('alumnos', AlumnoController::class);

Route::get('/estudiantes', [EstudianteController::class, "harold"]);














Route::get('/', [TemperaturaController::class, "index"]);
Route::get('/cent_2_kel', [TemperaturaController::class, "centigradosAKelvin"]);
Route::get('/diferencia', [TemperaturaController::class, "diferencia"]);

Route::post('/', [TemperaturaController::class, "centigradosAFarenheitConvertir"]);
Route::post('/cent_2_kel', [TemperaturaController::class, "centigradosAKelvinConvertir"]);
Route::post('/diferencia', [TemperaturaController::class, "diferenciaCalcular"]);

// rutas del examen
Route::get('/', [HomeController::class, 'index']);
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/mostrar/{id}', [ProductoController::class, 'show'])->whereNumber('id');
Route::get('/productos/create', [ProductoController::class, 'create']);
Route::get('/productos/editar/{id}', [ProductoController::class, 'edit'])->whereNumber('id');
Route::get('/productos/categoria', [ProductoController::class, 'categorias'])->whereAlpha('categoria');

