<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function formulario() {
        return view("cliente.formulario");
    }
    public function resultado(Request $request) {
        $rut=$request->query("rut","");
        $nombre=$request->query("nombre","");
        $apellido=$request->query("apellido","");
        $edad=$request->query("edad",0);
        return view("cliente.resultado",[
            'rut'=>$rut,'nombre'=>$nombre,'apellido'=> $apellido,'edad'=>$edad]);
    }
}
