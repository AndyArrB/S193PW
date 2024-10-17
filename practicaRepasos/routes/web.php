<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portada');
});

Route::view('/rutarepaso', 'repaso1')->name('rutarepaso');
