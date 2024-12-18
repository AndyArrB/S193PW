<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-black">

        <div class="container-fluid">

            <a class="navbar-brand text-light text-uppercase" href="{{ route('rutainicio') }}"> {{ __('Biblioteca')}} </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="{{ route('rutainicio') }}"> {{ __('Inicio') }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('rutaregistro') }}"> {{ __('Registrar libro') }} </a>
                    </li>

                </ul>

            </div>

        </div>


    </nav>
    
</body>

</html>
