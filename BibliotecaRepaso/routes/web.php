<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;

Route::get('/', function () {
    return view('inicio');
});

Route::view('rutainicio', 'inicio')->name('rutainicio');
Route::view('rutaregistro', 'registro')->name('rutaregistro');

Route::post('/guardar-libro', [LibroController::class, 'libro'])->name('guardarLibro');

