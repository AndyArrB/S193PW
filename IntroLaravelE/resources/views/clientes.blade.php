@extends('layouts.plantilla')
    
@section('clientesconsultados')
    {{-- Inicia tarjeta de cliente --}}

    @foreach ($consulta as $cliente)

    <div class="container mt-5 col-md md-8">

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

                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">
                    {{ __('Actualizar') }}
                </a>

                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" id="form-delete-{{ $cliente->id }}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $cliente->id }})">
                        {{ __('Eliminar') }}
                    </button>
                </form>

            </div>
        </div>
    </div>
    {{-- Finaliza tarjeta de cliente --}}

    @endforeach

    @session('selogro')

    <script> Swal.fire({
        title: "Registro actualizado",
        text: '{{$value}}',
        icon: "success"
      }); </script> 
        
    @endsession

    @session('funado')

    <script> Swal.fire({
        title: "Registro eliminado",
        text: '{{$value}}',
        icon: "success"
      }); </script> 
        
    @endsession

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: '¿Estás seguro de eliminar este registro?',
                text: "No podrás revertir esta acción",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Eliminar registro',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Envía el formulario correspondiente
                    document.getElementById('form-delete-' + id).submit();
                }
            });
        }
    </script>

    @endsection