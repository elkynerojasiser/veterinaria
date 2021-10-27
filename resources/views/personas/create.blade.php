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
                    Crear nueva persona
                </h1>
            </div>
        </div>
        <div class="row pt-3 pb-3">
            <div class="col">
                <a href="{{ route('personas.index') }}" class="btn btn-primary">Regresar al listado</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('personas.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-2">
                            <img src="" alt="" width="200px" height="200px" id="imagen">
                            <input type="file" class="d-none" name="input_imagen" id="input_imagen">
                            <textarea class="d-none" name="imagen" id="text_imagen" cols="30"
                                rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cedula">Cédula</label>
                        <input type="text" class="form-control" id="cedula" name="cedula">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <input type="text" class="form-control" id="direccion" name="direccion">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono">
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
    <script>
        var imagen = document.getElementById('imagen');
        var input_imagen = document.getElementById('input_imagen');
        var text_imagen = document.getElementById('text_imagen');

        imagen.addEventListener('click', function() {
            input_imagen.click();
        });

        input_imagen.addEventListener('change', function() {
            var file = this.files[0];
            var sizebyte = this.files[0].size;
            var sizekilobyte = parseInt(sizebyte / 1024);
            if (sizekilobyte > 1024) {
                alert('La imagen excede el tamaño permitido de 1 MB');
            } else {
                var reader = new FileReader();
                reader.onloadend = function() {
                    document.getElementById("imagen").src = reader.result;
                    text_imagen.value = reader.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>

</html>
