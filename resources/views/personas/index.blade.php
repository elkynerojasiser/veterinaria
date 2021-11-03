@extends('layouts.template')
@section('titulo', 'Listado de personas')
@section('encabezado')
    <i class="fa fa-align-justify"></i> Personas
    <a type="button" class="btn btn-success" href="{{ route('personas.create') }}">
        <i class="fa fa-plus"></i>&nbsp;Nuevo
    </a>
@endsection
@section('contenido')
    <div class="row">
        <div class="col">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>Cédula</td>
                        <td>Nombre</td>
                        <td>Apellido</td>
                        <td>Dirección</td>
                        <td>Teléfono</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($personas as $persona)
                        <tr>
                            <td>{{ $persona->cedula }}</td>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->apellido }}</td>
                            <td>{{ $persona->direccion }}</td>
                            <td>{{ $persona->telefono }}</td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('personas.show', ['persona' => $persona->id]) }}"
                                            class="btn btn-info">Detalle</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('personas.edit', ['persona' => $persona->id]) }}"
                                            class="btn btn-warning">Editar</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('personas.delete', ['persona' => $persona->id]) }}"
                                            class="btn btn-danger">Eliminar</a>
                                    </div>
                                    <div class="col">
                                        <a href="{{ route('mascotas.index', ['persona_id' => $persona->id]) }}"
                                            class="btn btn-primary">Mascotas</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
