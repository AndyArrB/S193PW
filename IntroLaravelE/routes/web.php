<?php

use Illuminate\Support\Facades\Route;

/* Importo el controlador para que el archivo lo reconozca y pueda ejecutarlo sin problema */
use App\Http\Controllers\ClienteController;

/* Ejecuto el controlador */
Route::get('/', [ClienteController::class, 'home'])->name('rutainicio');

Route::resource('cliente', ClienteController::class);

Route::get('/clientes/actualizar/{id}', [ClienteController::class, 'edit'])->name('clientes.edit');

/* ruta para poder actualizar algun dato de la BD */
Route::put('/clientes/actualizar/{id}', [ClienteController::class, 'update'])->name('clientes.update');

/* ruta para eliminar un dato de la BD */
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');



