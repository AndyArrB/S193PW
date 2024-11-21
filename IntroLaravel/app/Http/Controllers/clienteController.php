<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource. Osea que aquí va la consulta
     */
    public function index()
    {
        $consultaclientes = DB::table('clientes')->get();
        return view('clientes', compact('consultaclientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage. Osea hago el insert
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=> Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        /* aqui le decimos que queremos guardar el nombre que se ingrese que viene del txtnombre */
        $usuario=$request->input('txtnombre');
        
        /* aqui creamos la sesion donde si es un exito, enviará el mensaje de que se guardo el usuario */
        session()->flash('exito','Se guardó el usuario: '.$usuario);
        return to_route('rutaform');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource. aqui mando para el formulario de editar
     */
    public function edit($id)
    {
        $cliente = DB::table('clientes')->where('id', $id)->first();
        return view('formularioactualizar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, $id)
    {
        DB::table('clientes')->where('id', $id)->update([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "updated_at" => Carbon::now()
        ]);
    
        return redirect()->route('rutaclientes')->with('benditodios', 'Los datos se actualizaron de manera exitosa');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DB::table('clientes')->where('id', $id)->delete();

        return redirect()->route('rutaclientes')->with('funadote', 'Se eliminó al cliente de manera exitosa.');
    
    }
}
