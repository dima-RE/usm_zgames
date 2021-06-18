<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsolasController extends Controller
{
    public function getMarcas(){
        // solo listas estaticas
        //$marcas = ["Sony","Microsoft","Nintendo","Sega"];
        // listas que pueden cambiar con el tiempo
        $marcas = array();
        $marcas[] = "Sony";
        $marcas[] = "Microsoft";
        $marcas[] = "Nintendo";
        $marcas[] = "Sega";

        return $marcas;
    }
}
