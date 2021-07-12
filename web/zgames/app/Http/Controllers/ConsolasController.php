<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consola;

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

    /**
     * busca consolas en la BD y las retorna
     */
    public function getConsolas(){
        // equivalente a select * from all
        $consolas = Consola::all();
        return $consolas;
    }

    /**
     * registra consola de ejemplo en bd
     */
    public function crearConsola(Request $request){
        // equivalente a insert into blah blah

        $input = $request->all();

        $consola = new Consola();
        $consola->nombre = $input["nombre"];
        $consola->marca = $input["marca"];
        $consola->anno = $input["anno"];

        $consola->save();
        return $consola;
    }

    public function eliminarConsola(Request $request){
        $input = $request->all();
        $id = $input["id"];
        // Eloquent: administrador de BD de laravel.
        // 1 - ir al registro en la BD
        $consola = Consola::findOrFail($id); // laravel de hace cargo en caso de errores
        // 2 - llamar al metodo delete
        $consola->delete(); // equivalente a DELETE FROM consolas WHERE id=1
        return "ok";
    }

}
