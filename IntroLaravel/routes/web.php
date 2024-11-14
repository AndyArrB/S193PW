<?php

use Illuminate\Support\Facades\Route;

/* Importo el controlador para que el archivo lo reconozca y pueda ejecutarlo sin problema */
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

/* Ejecuto el controlador */
Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio');

Route::get('/consultar', [ControladorVistas::class, 'consulta'])->name('rutaclientes');

Route::post('/enviarCliente', [ControladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

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



/* rutas para cliente controlador */

Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');