@extends('layouts.plantilla')
    
@section('clientesconsultados')
    {{-- Inicia tarjeta de cliente --}}
    <div class="container mt-5 col-md md-8">


        @foreach ($consulta as $cliente)
        
        <div class="card text-justify font-monospace">
            <div class="card-header fs-5 text-primary">
                {{$cliente->nombre}} {{$cliente->apellido}}
            </div>

            <div class="card-body">
                <h5 class="fw-bold"> {{$cliente->correo}} </h5>
                <h5 class="fw-medium"> {{$cliente->telefono}} </h5>
                <p class="card-text fw-lighter"> </p>
            </div>

            <div class="card-footer text-muted">
                <button class="btn btn-warning btm-sm" type="submit"> {{ __('Actualizar')}} </button>
                <button class="btn btn-danger btn-sm" type="submit"> {{ __('Eliminar')}} </button>
            </div>
        </div>
    </div>
    {{-- Finaliza tarjeta de cliente --}}

    @endforeach

    @endsection