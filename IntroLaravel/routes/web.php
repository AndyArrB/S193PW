<?php

use Illuminate\Support\Facades\Route;

/* Importo el controlador para que el archivo lo reconozca y pueda ejecutarlo sin problema */
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

/* Ejecuto el controlador */
Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio');

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



/* rutas para cliente controlador */

/* para mostrar el formulario */
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');

/* para hacer un insert en la bd del formulario */
Route::post('/cliente', [clienteController::class, 'store'])->name('rutaEnviar');

/* para mostrar a los clientes */
Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');

/* para mandar al form de actualizar */
Route::get('/cliente/actualizar/{id}', [clienteController::class, 'edit'])->name('rutaactualizar');

/* para ejecutar la actualizacion */
Route::post('/cliente/actualizar/{id}', [clienteController::class, 'update'])->name('rutaUpdate');

/* para eliminar el dato seleccionado */
Route::delete('/cliente/{id}', [clienteController::class, 'destroy'])->name('rutaEliminar');
