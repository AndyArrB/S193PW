<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::view('rutainicio', 'inicio')->name('rutainicio');
Route::view('rutaregistro', 'registro')->name('rutaregistro');