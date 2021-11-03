@extends('layouts.template')

@section('titulo', 'Editar Persona')
@section('encabezado')
    <i class="fa fa-align-justify"></i> Personas
    <a type="button" class="btn btn-info" href="{{ route('personas.index') }}">
        <i class="fa fa-arrow-left"></i>&nbsp;Regresar
    </a>
@endsection
@section('contenido')
    <div class="row">
        <div class="col">
            <form action="{{ route('personas.update', ['persona' => $persona->id]) }}" method="POST">
                {{ method_field('PUT') }}
                @csrf
                <div class="row d-flex justify-content-center">
                    <div class="col-sm-2">
                        @if ($persona->imagen)
                            <img src="{{ $persona->imagen }}" alt="" width="200px" height="200px" id="imagen">
                        @else
                            <img src="{{ asset('img/default.jpg') }}" alt="" width="200px" height="200px" id="imagen">
                        @endif
                        <input type="file" class="d-none" name="input_imagen" id="input_imagen">
                        <textarea class="d-none" name="imagen" id="text_imagen" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cedula">Cédula</label>
                    <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $persona->cedula }}">
                    @error('cedula')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $persona->nombre }}">
                    @error('nombre')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido"
                        value="{{ $persona->apellido }}">
                    @error('apellido')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion"
                        value="{{ $persona->direccion }}">
                    @error('direccion')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono"
                        value="{{ $persona->telefono }}">
                    @error('direccion')
                        <span class="text-danger"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection

@section('script')
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
