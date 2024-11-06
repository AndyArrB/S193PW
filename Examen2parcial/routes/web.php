<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\procesoPrendas;

Route::get('/', function () {
    return view('registroPrendas');
});



Route::get('/procesar', [procesoPrendas::class, 'procesoPrenda'])->name('procesar');