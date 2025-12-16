<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function ejemplo1() {
        $texto="hola<b>hola</b> mundo";
        $color="rojo";
        $paises=['chile','argentina','peru','bolivia'];


        return view("ejemplo.ejemplo1",
        ['texto'=>$texto,'color'=>$color,'paises'=>$paises]);    
    }
    public function ejemplo2() {
        $productos=[
            ['nombre'=>'cocacola','cantidad'=>100,"precio"=>50],
            ['nombre'=>'fanta','cantidad'=>100,"precio"=>50],
            ['nombre'=>'sprite','cantidad'=>100,"precio"=>50],
            ['nombre'=>'seven up','cantidad'=>100,"precio"=>50],
        ];
        /*foreach( $productos as $producto ) {
            echo $producto['nombre'];
        }*/
        return view('ejemplo.ejemplo2',['productos'=>$productos]);
    }
}
