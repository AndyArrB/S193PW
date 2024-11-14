@extends('layouts.plantilla')
    
@section('clientesconsultados')
    {{-- Inicia tarjeta de cliente --}}
    <div class="container mt-5 col-md md-8">
        <div class="card text-justify font-monospace">
            <div class="card-header fs-5 text-primary">
                Andrea Arredondo Balderas
            </div>

            <div class="card-body">
                <h5 class="fw-bold"> andrea.arredondo@outlook.com </h5>
                <h5 class="fw-medium"> 4422641001 </h5>
                <p class="card-text fw-lighter"> </p>
            </div>

            <div class="card-footer text-muted">
                <button class="btn btn-warning btm-sm" type="submit"> {{ __('Actualizar')}} </button>
                <button class="btn btn-danger btn-sm" type="submit"> {{ __('Eliminar')}} </button>
            </div>
        </div>
    </div>
    {{-- Finaliza tarjeta de cliente --}}
    @endsection