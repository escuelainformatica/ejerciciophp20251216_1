<?php

use App\Http\Controllers\CalculadoraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ingreso',[CalculadoraController::class,'ingreso']);
Route::get('/resultado',[CalculadoraController::class,'resultado']);