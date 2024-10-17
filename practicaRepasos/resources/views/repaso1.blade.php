<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Repaso 1</title>

    @vite(['resources/js/app.js'])

</head>

<body>
    <div class="container fs-5 position-absolute top-50 start-50 translate-middle text-center" style="width: 30rem">
        <form action="{{ route('convertir') }}" method="GET">

            <label class="form-label">Cantidad:</label><br>
            <input type="number" name="cantidad" required class="form-control"><br>
            <label class="form-label">Conversión:</label><br>

            <select name="unidad" required class="form-select">
                <option value="MB_a_GB">MB (megabyte) a GB (gigabyte)</option>
                <option value="GB_a_MB">GB (gigabyte) a MB (megabyte)</option>
                <option value="GB_a_TB">GB (gigabyte) a TB (terabyte)</option>
                <option value="TB_a_GB">TB (terabyte) a GB (gigabyte)</option>
            </select>
            <br><br>
            <button type="submit" class="btn btn-outline-success fs-4">Convertir</button>

        </form>
    </div>
</body>

</html>
