<?php

use Illuminate\Support\Facades\Route;

/* Importo el controlador para que el archivo lo reconozca y pueda ejecutarlo sin problema */
use App\Http\Controllers\ClienteController;

/* Ejecuto el controlador */
Route::get('/', [ClienteController::class, 'home'])->name('rutainicio');

Route::resource('cliente', ClienteController::class);

