@extends('layout.plantilla')

@section('content')
    <div class="container my-4">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="{{ asset('img/robotmeme.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <h3> {{ __('Noticia literaria') }} </h3>
                <p> {{ __('Los robots están dominando al mundo, de acuerdo a fuentes de la BBC se reportan casos de que los robots comienzan a reemplazar a los humanos en las actividades de su vida cotidiana') }}
                </p>
            </div>
        </div>
    </div>
@endsection

