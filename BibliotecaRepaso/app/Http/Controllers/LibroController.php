<?php

namespace App\Http\Controllers;
use App\Http\Requests\LibroRequest;
use Illuminate\Http\Request;

class LibroController extends Controller
{
  
    
    public function libro(LibroRequest $request)
    {
       
        $titulo = $request->input('titulo');
        session()->flash('exito','Se guardó el libro: ' .$titulo);
        return to_route('rutaregistro');
 
    }


}


