<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ControladorVistas extends Controller
{
    /* Usamos este controlador para administrar la lógica de las vistas */ 

    public function home() {
        return view('inicio');
    }

    public function formulario() {
        return view('formulario');
    }

    public function consulta() {
        return view('clientes');
    }

    public function procesarCliente(validadorCliente $peticion) {

       //Redirección con un mensaje flsh en session
       $usuario=$peticion->input('txtnombre');
       session()->flash('exito','Se guardó el usuario: '.$usuario);
       return to_route('rutaform');
    }



}
