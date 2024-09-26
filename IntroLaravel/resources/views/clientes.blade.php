<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar clientes</title>
    
    @vite(['resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/fondo.css')}}">
</head>
<body>
    
    {{-- Inicia navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="{{route('rutainicio')}}" class="navbar-brand"> Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('rutaformulario')}}" class="nav-link" aria-current="page"> Registro clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Consulta clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Finaliza Navbar--}}

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
                <button class="btn btn-warning btm-sm" type="submit"> Actualizar </button>
                <button class="btn btn-danger btn-sm" type="submit"> Eliminar </button>
            </div>
        </div>
    </div>
    {{-- Finaliza tarjeta de cliente --}}
</body>
</html>