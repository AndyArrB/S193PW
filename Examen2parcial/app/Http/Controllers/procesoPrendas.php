<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validacionPrendas;

class procesoPrendas extends Controller
{
    
    public function procesoPrenda(validacionPrendas $request){


        

        $prenda=$request->input('prenda'); 
        $color=$request->input('color');

        session()->flash('benditoseadios','Se guardó la prenda: '.$prenda .$color);
       return view('registroPrendas');

    }
}
