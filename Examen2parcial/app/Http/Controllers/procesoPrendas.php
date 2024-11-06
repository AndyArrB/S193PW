<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validacionPrendas;

class procesoPrendas extends Controller
{
    
    public function procesoPrenda(validacionPrendas $peticion){


        $prenda=$peticion->input('prenda'); 

        session()->flash('benditoseadios','Se guardó la prenda: '.$prenda);
       return view('registroPrendas');

    }
}
