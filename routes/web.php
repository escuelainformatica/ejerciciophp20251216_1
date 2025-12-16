<?php

use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ingreso',[CalculadoraController::class,'ingreso']);
Route::get('/resultado',[CalculadoraController::class,'resultado']);

Route::get('/cliente/formulario',[ClienteController::class,'formulario']);
Route::get('/cliente/resultado',[ClienteController::class,'resultado']);