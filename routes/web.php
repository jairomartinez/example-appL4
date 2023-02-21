<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TemperaturaController;
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

Route::get('/', [TemperaturaController::class, "index"]);
Route::get('/cent_2_kel', [TemperaturaController::class, "centigradosAKelvin"]);
Route::get('/diferencia', [TemperaturaController::class, "diferencia"]);

Route::post('/', [TemperaturaController::class, "centigradosAFarenheitConvertir"]);
Route::post('/cent_2_kel', [TemperaturaController::class, "centigradosAKelvinConvertir"]);
Route::post('/diferencia', [TemperaturaController::class, "diferenciaCalcular"]);

