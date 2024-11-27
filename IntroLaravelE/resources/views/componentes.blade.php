@extends('layouts.plantilla')

@section('titulo', 'Componentes Blade')

@section('contenido')

<x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Oki">
    Soy el contenido del primero
</x-Card>
<x-Card encabezado="Componente 2" titulo="Dinamico 2" textoBoton="Oki"> 
    Soy el contenido del segundo
</x-Card>
    
<x-Alert tipo="danger"> Hola </x-Alert>
<x-Alert tipo="success"> Es lima  </x-Alert>
    
@endsection