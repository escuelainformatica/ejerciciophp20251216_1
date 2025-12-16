<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function ingreso() {
        return view("calculadora.formularioingreso");
    }
    public function resultado(Request $request) { // <-- $request sirve para obtener los valores enviados por el usuario
        $total=$request->query("numero1",0)+$request->query("numero2",0);
        return view("calculadora.resultado",["total"=>$total]);
    }
}
