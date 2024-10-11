<?php

use Illuminate\Support\Facades\Route;

/* Importo el controlador para que el archivo lo reconozca y pueda ejecutarlo sin problema */
use App\Http\Controllers\ControladorVistas;

/* Ejecuto el controlador */
Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio');

Route::get('/form', [ControladorVistas::class, 'formulario'])->name('rutaform');

Route::get('/consultar', [ControladorVistas::class, 'consulta'])->name('rutaclientes');

/*  Route::get('/', function () {
    return view('inicio');
})->name('rutainicio');

Route::get('/form', function () {
    return view('formulario');
})->name('rutaform');

Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaclientes'); 

Route::view('/', 'inicio')->name('rutainicio');
Route::view('/form', 'formulario')->name('rutaform');
Route::view('/consultar', 'clientes')->name('rutaclientes'); */

Route::view('/component', 'componentes');

