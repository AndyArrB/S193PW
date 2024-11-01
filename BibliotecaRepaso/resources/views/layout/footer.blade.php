<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        
        .content {
            flex: 1;
        }
        
    </style>


</head>
<body>
    
    <footer class="bg-dark text-white text-center py-3 mt-4 mb-0">
        <div class="container">
            <p class="mb-1"> {{ __('Biblioteca de Andy') }} </p>
            <p class="mb-1">© {{ date('Y') }} {{ __('Todos los derechos reservados') }} </p>
            <p class="mb-1"> {{ date('d') }} {{ date('F') }} {{ date('Y') }}</p>
            {{-- Date (D) muestra el día del mes, luego Date(F) muestra el nombre del mes y finalmente el date(Y)
                muestra el año. --}}
        </div>
    </footer>
</body>
</html>