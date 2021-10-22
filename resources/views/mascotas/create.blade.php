<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="text-primary">
                    Crear nueva mascota
                </h1>
            </div>
        </div>
        <div class="row pt-3 pb-3">
            <div class="col">
                <a href="{{ route('mascotas.index',['persona_id' => $persona->id]) }}" class="btn btn-primary">Regresar al listado</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('mascotas.store') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $persona->id }}" name="persona_id">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="especie">Especie</label>
                        <select class="form-control" name="especie" id="especie">
                            <option value="">--Seleccione--</option>
                            <option value="canino">Canino</option>
                            <option value="felino">Felino</option>
                            <option value="ave">Ave</option>
                            <option value="reptil">Reptil</option>
                            <option value="bovino">Bovino</option>
                            <option value="equino">Equino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="number" class="form-control" id="edad" name="edad">
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <select class="form-control" name="color_id" id="color">
                            <option value="0">--Seleccione--</option>
                            @foreach ($colores as $color)
                                <option value="{{ $color->id }}">{{ $color->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="peso">Peso</label>
                        <input type="number" class="form-control" id="peso" name="peso">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
