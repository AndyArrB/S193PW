<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertidorControlador extends Controller
{
    public function convertir(Request $request) {

        /* traigo la cantidad que se ingresó */
        $cantidad = $request->input('cantidad');
        $unidad = $request->input('unidad');

       /*  Se realiza la conversión a traves de un switch para cada una de las opciones */
       $resultado = '';

       switch ($unidad) {
        case 'MB_a_GB':
            $resultado = $cantidad / 1024 . ' Gigabytes';
            break;
        
        case 'GB_a_MB':
            $resultado = $cantidad * 1024 . ' Megabytes';
            break;
        
        case 'GB_a_TB':
            $resultado = $cantidad /1000 . ' Terabytes';
            break;

        case 'TB_a_GB':
            $resultado = $cantidad * 1000 . ' Gigabytes';
            break;
        
        default:
        $resultado = 'no se logró';

        
       }

       return "El resultado es $resultado";
    }
}
