<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function procesarCliente(Request $peticion) {
        /* return 'Si llegó la información del cliente'; */

        /* Envia toda la información del formulario */
        return $peticion->all();

        /* Envia la ruta de donde se mandó la información */
        return $peticion->path();

        /* Envía la url de donde se mandó la información */
        return $peticion->url();

        /* Envía la ip de donde se envío la información */
        return $peticion->ip();
    }



}
