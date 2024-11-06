<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Regitro</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <h1>Registro de prendas</h1><br>


    @if (@session('benditoseadios'))
    <script> Swal.fire({
        title: "Respuesta",
        text: "Se guardó: ",
        icon: "Tu muy bien"
      }); </script> 
        
        
    @endif

    <form action="/procesar" method="GET">
        <label for="prenda">Prenda:</label>
        <input type="text"name="prenda"><br><br>
        <small> {{ $errors->first('prenda') }} </small>

        <label for="color">Color:</label>
        <input type="text" name="color"><br><br>
        <small> {{ $errors->first('color') }} </small>

        <label for="cantidad">Cantidad:</label>
        <input type="number"  name="cantidad"><br><br>
        <small> {{ $errors->first('cantidad') }} </small>
        
        <button type="submit"> Guardar prenda </button>
    </form>
</body>
</html>