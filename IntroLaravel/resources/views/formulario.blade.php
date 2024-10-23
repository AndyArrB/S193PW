 @extends('layouts.plantilla')

 @section('contenido')
     {{-- inicia tarjeta con formulario --}}

     {{-- @dump($id)--}}

     <div class="container nt-5 col-md-6">

        @if(session('exito'))

        <x-Alert tipo="success"> {{session('exito')}} </x-Alert>

        @endif

        @session('exito')
        <x-Alert tipo="warning"> {{$value}} </x-Alert>
        @endsession

        @session('exito')

        <script> Swal.fire({
            title: "A gustooo",
            text: "Los datos se enviaron de manera exitosa",
            icon: "Tu muy bien"
          }); </script> 
    
        @endsession


         <div class="card font-monospace">

             <div class="card-header fs-5 text-center text-primary">
                 Registro de clientes
             </div>

             <div class="card-body text-justify">

                 <form action="/enviarCliente" method="POST">
                     @csrf

                     <div class="mb-3">
                         <label for="nombre" class="form-label">Nombre: </label>
                         <input type="text" class="form-control" name="txtnombre">
                     </div>

                     <div class="mb-3">
                         <label for="apellido" class="form-label">Apellido: </label>
                         <input type="text" class="form-control"name="txtapellido">
                     </div>

                     <div class="mb-3">
                         <label for="correo" class="form-label">Correo: </label>
                         <input type="email" class="form-control" name="txtcorreo">
                     </div>

                     <div class="mb-3">
                         <label for="telefono" class="form-label">Teléfono: </label>
                         <input type="number" class="form-control" name="txttelefono">
                     </div>

             </div>

             <div class="card-footer text-muted">

                 <div class="d-grid gap-2 mt-2 mb-1">
                     <button class="btn btn-success btn-sm" type="submit"> Guardar cliente</button>
                 </div>
                 </form>
             </div>
         </div>
     </div> {{-- divcontainer --}}
     {{-- Finaliza tarjeta con formulario --}}
 @endsection
