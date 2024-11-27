<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class ClienteController extends Controller
{

    public function home()
    {
        return view('inicio');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $consulta = cliente::all();

        return view('clientes', compact('consulta'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Aqui agregamos un objeto osea que añadiremos un registro a la BD
     */
    public function store(validadorCliente $request)
    {
        /* Instanciamos una clase, es decir creamos un objeto proveniente de la clase */
        $addCliente = new cliente();

        $addCliente->nombre = $request->input('txtnombre');
        $addCliente->apellido = $request->input('txtapellido');
        $addCliente->correo = $request->input('txtcorreo');
        $addCliente->telefono = $request->input('txttelefono');

        $addCliente->save();

        $msj = $request->input('txtnombre');
        session()->flash('exito', 'Se guardó correctamente el cliente: '.$msj);
        return back();

    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
