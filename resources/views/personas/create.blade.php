@extends('layouts.template')
@section('titulo', 'Crear Persona');

@section('contenido')
    <div class="row">
        <div class="col">
            <form action="{{ route('personas.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-2">
                        <img src="{{ asset('img/default.jpg') }}" alt="" width="200px" height="200px" id="imagen">
                        <input type="file" class="d-none" name="input_imagen" id="input_imagen">
                        <textarea class="d-none" name="imagen" id="text_imagen" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cedula">Cédula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula">
                    @error('cedula')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                    @error('nombre')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido">
                    @error('apellido')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion">
                    @error('direccion')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                    @error('telefono')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
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
@endsection
