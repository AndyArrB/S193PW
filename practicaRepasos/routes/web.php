<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConvertidorControlador;

/* Ruta default con la que comienzo */
Route::get('/', function () {
    return view('portada'); });

/* Creo la ruta para mostrar la vista del repaso */
Route::view('/rutarepaso', 'repaso1')->name('rutarepaso');

/* Creo mi ruta GET, luego indico el nombre de la ruta, el controlador que usará y la función que va a ejecutar */
Route::get('/convertir', [ConvertidorControlador::class, 'convertir'])->name('convertir');

