<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Retorna la dirección en la web del archivo
/*
Route::get('/', function () {
    return view('home');
});
*/
//Funciona igual que el otro, cambiando la referencia en el -blade.php
//Sistemma de rutas
Route::view("/","home")->name("home");
// Importante = Los framework funcionas por convenciones, necesitan tener un nombre y lugar determinado.
Route::view("/ver_consola","ver_consola")->name("ver_consola");
Route::view("/ver_juegos","ver_juegos")->name("ver_juegos");
Route::view("/agregar_juego","agregar_juego")->name("agregar_juego");