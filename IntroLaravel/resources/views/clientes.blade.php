@extends('layouts.plantilla')
    
@section('clientesconsultados')
    {{-- Inicia tarjeta de cliente --}}
    <div class="container mt-5 col-md md-8">

        {{-- aqui vamos a iterar la consulta, es decir cada que de una vuelta nos dará un cliente diferente --}}
        @foreach ($consultaclientes as $cliente)
            

        <div class="container mt-5 col-md md-8 card text-justify font-monospace mt-4">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre }}
            </div>

            <div class="card-body">
                <h5 class="fw-bold"> {{ $cliente->correo }} </h5>
                <h5 class="fw-medium"> {{ $cliente->telefono}} </h5>
                <p class="card-text fw-lighter"> </p>
            </div>

            <div class="card-footer text-muted">
                <button class="btn btn-warning btm-sm" type="submit"> {{ __('Actualizar')}} </button>
                <button class="btn btn-danger btn-sm" type="submit"> {{ __('Eliminar')}} </button>
            </div>
        </div>
    </div>
    @endforeach
    {{-- Finaliza tarjeta de cliente --}}



    @endsection