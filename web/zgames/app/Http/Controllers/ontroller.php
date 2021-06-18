<?php
namespace App\Http\Controller;

use Illuminate\Http\Request;
use App\\Models\Consola;
use Illuminate\support\Far
//Aqui va a ir toda la logica vinculada a las consolas
class ConsolasController extends Controller
{
    /**
     * Esta funcion va a ir a buscar todas las consolas que existen en la bd
     * y las va a retornar
     */
    public function getConsolas(){
        //Equivalente a un select * from consolas
        $consolas = Consola::all();
        return $consolas;
    }

    /**
     * Esta funcion va a registrar una consola de ejemplo en la bd
     * TODO: Mejorar esto para que no sea un ejemplo
     */
    public function crearConsola(){
        //Equivalente a un insert into bla bla
        $consola = new Consola();
        $consola->nombre = "Nintendo Switch";
        $consola->marca = "Nintendo";
        $consola->anno = 2015;

        $consola->save();
        //return $consola;
    }
}


//view productos.blade.php
//renderizar productos

//ProductosController
    // - ir a buscar los productos a la bd
    // - los filtra por los disponibles
    // - formatea el precio
    // retorna lista de productos procesados
