<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <!-- Barra de navegación -->
    @include('layout.navbar')

    <!-- Contenido principal de la página -->
    <div class="content">
        @yield('content')
    </div>

    <div class="contentBook">
        @yield('contentBook')
    </div>

    <!-- Pie de página -->
    @include('layout.footer')

</body>
</html>