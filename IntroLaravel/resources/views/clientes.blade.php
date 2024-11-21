@extends('layouts.plantilla')

@section('clientesconsultados')
    {{-- Inicia tarjeta de cliente --}}
    <div class="container mt-5 col-md md-8">

        @session('benditodios')
            <script>
                Swal.fire({
                    title: "Actualización exitosa",
                    text: "{{ session('benditodios') }}",
                    icon: "success",
                    confirmButtonText: "Aceptar"
                });
            </script>
        @endsession

        @session('funadote')
            <script>
                Swal.fire({
                    title: "Eliminación exitosa",
                    text: "{{ session('mensajeEliminado') }}",
                    icon: "success",
                    confirmButtonText: "Aceptar"
                });
            </script>
        @endsession

        {{-- aqui vamos a iterar la consulta, es decir cada que de una vuelta nos dará un cliente diferente --}}
        @foreach ($consultaclientes as $cliente)
            <div class="container mt-5 col-md md-8 card text-justify font-monospace mt-4">
                <div class="card-header fs-5 text-primary">
                    {{ $cliente->nombre }}
                </div>

                <div class="card-body">
                    <h5 class="fw-bold"> {{ $cliente->correo }} </h5>
                    <h5 class="fw-medium"> {{ $cliente->telefono }} </h5>
                    <p class="card-text fw-lighter"> </p>
                </div>

                <div class="card-footer text-muted">
                    <div class="card-footer text-muted mt-1">
                        <form action="{{ route('rutaactualizar', ['id' => $cliente->id]) }}" method="get">
                            <button class="btn btn-warning btm-sm" type="submit">Actualizar</button>
                        </form>
                    </div>

                    <div class="card-footer text-muted mt-1">
                        <form action="{{ route('rutaEliminar', ['id' => $cliente->id]) }}" method="POST"
                            id="formEliminar{{ $cliente->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm"
                                onclick="confirmarEliminacion({{ $cliente->id }})">
                                {{ __('Eliminar') }}
                            </button>
                        </form>
                    </div>

                    <script>
                        function confirmarEliminacion(clienteId) {
                            Swal.fire({
                                title: "¿Súper segurisimo?",
                                text: "Se eliminará de manera permanente al cliente elegido, mucho ojo.",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#d33",
                                cancelButtonColor: "#3085d6",
                                confirmButtonText: "Sí, estoy seguro",
                                cancelButtonText: "Cancelar"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    document.getElementById('formEliminar' + clienteId).submit();
                                }
                            });
                        }
                    </script>


                </div>
            </div>
    </div>
    @endforeach
    {{-- Finaliza tarjeta de cliente --}}
@endsection
