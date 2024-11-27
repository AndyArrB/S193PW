 @extends('layouts.plantilla')

 @section('contenido')
     {{-- inicia tarjeta con formulario --}}

     {{-- @dump($id)--}}

     <div class="container nt-5 col-md-6">

        {{-- @if(session('exito'))

        <x-Alert tipo="success"> {{session('exito')}} </x-Alert>

        @endif --}}



         <div class="card font-monospace">

             <div class="card-header fs-5 text-center text-primary">
                {{ __('Registro de clientes') }}
             </div>

             <div class="card-body text-justify">

                 <form action="{{route('cliente.update', $cliente->id)}}" method="POST">
                     @csrf
                     <input type="hidden" name="_method" value="PUT">

                     <div class="mb-3">
                         <label for="nombre" class="form-label">{{ __('Nombre:') }} </label>
                         <input type="text" class="form-control" name="txtnombre" autocomplete="off" value="{{ $cliente->nombre }}">
                         <small class="text-danger fst-italic"> {{ $errors->first('txtnombre') }} </small>
                     </div>

                     <div class="mb-3">
                         <label for="apellido" class="form-label">{{ __('Apellido:') }} </label>
                         <input type="text" class="form-control"name="txtapellido" autocomplete="off" value="{{ $cliente->apellido }}">
                         <small class="text-danger fst-italic"> {{ $errors->first('txtapellido') }} </small>
                     </div>

                     <div class="mb-3">
                         <label for="correo" class="form-label">{{ __('Correo:') }} </label>
                         <input type="text" class="form-control" name="txtcorreo" autocomplete="off" value="{{ $cliente->correo }}">
                         <small class="text-danger fst-italic"> {{ $errors->first('txtcorreo') }} </small>
                     </div>

                     <div class="mb-3">
                         <label for="telefono" class="form-label">{{ __('Teléfono:') }} </label>
                         <input type="text" class="form-control" name="txttelefono" autocomplete="off" value="{{ $cliente->telefono }}">
                         <small class="text-danger fst-italic"> {{ $errors->first('txttelefono') }} </small>
                     </div>

             </div>

             <div class="card-footer text-muted">

                 <div class="d-grid gap-2 mt-2 mb-1">
                     <button class="btn btn-success btn-sm" type="submit"> {{ __('Guardar cliente') }}</button>
                 </div>
                 </form>
             </div>
         </div>
     </div> {{-- divcontainer --}}
     {{-- Finaliza tarjeta con formulario --}}
 @endsection
