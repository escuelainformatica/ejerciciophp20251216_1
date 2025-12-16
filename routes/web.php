<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EjemploController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo/ejemplo1',[EjemploController::class,'ejemplo1']);
Route::get('/ejemplo/ejemplo2',[EjemploController::class,'ejemplo2']);

Route::get('/ingreso',[CalculadoraController::class,'ingreso']);
Route::get('/resultado',[CalculadoraController::class,'resultado']);

Route::get('/cliente/formulario',[ClienteController::class,'formulario']);
Route::get('/cliente/resultado',[ClienteController::class,'resultado']);

Route::get('/cliente/formularioPost',[ClienteController::class,'formularioPost']);
Route::post('/cliente/resultadoPost',[ClienteController::class,'resultadoPost']);