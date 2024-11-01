<?php

namespace App\Http\Controllers;
use App\Http\Requests\LibroRequest;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    
    public function crear()
    {
        return view('registro');
    }

    
    public function libro(LibroRequest $request)
    {
       
        $titulo = $request->input('titulo');
        
        return redirect()->route('rutaregistro')->with('success', "Libro '{$titulo}' guardado");
    }


}


