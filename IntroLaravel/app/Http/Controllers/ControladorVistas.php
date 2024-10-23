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

        //Respuesta de redirección
        /* return redirect('/'); */
        
        // Respuestas de redirección usando el nombre de la ruta
        /* return redirect()->route('rutaclientes'); */

        //Redirección al origen de la peticion
       /*  return back(); */

       //Redirección con variables adjuntas
      /*  $id = [['usuario'=>1], ['usuario'=>2]];
       return view('formulario', compact('id')); */

       //Redirección con un mensaje flsh en session
       $usuario=$peticion->input('txtnombre');
       session()->flash('exito','Se guardó el usuario: '.$usuario);
       return to_route('rutaform');
    }



}
