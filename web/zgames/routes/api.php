<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//importa el controlador
use App\Http\Controllers\ConsolasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get -> obtener una variable
//post -> ingresar una variable
//Route::get("url", [Controlador::class, "metodo o funcion"]);
Route::get("marcas/get", [ConsolasController::class, "getMarcas"]);

Route::get("consolas/get", [ConsolasController::class, "getConsolas"]);

Route::post("consolas/post", [ConsolasController::class, "crearConsola"]);
Route::post("consolas/delete", [ConsolasController::class, "eliminarConsola"]);