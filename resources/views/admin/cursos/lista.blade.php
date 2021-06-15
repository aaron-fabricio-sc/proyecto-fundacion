@extends('adminlte::page')
@section('title', 'Lista de estudiantes del curso' . $curso->nombre)

@section('content_header')
    <h1 class="text-gray-700">Lista de los estudiantes del curso {{ $curso->nombre }}</h1>
@stop
@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>
                {{ session('info') }}
            </strong>
        </div>

    @endif

    {{-- <div class="card">
        <div class="card-header flex">
            <a href="{{ route('admin.estudiantes.create') }}" class="boton text-white text-center w-1/3">Crear Nuevo
                Estudiante</a>

            <a href="{{ route('admin.estudiantes.inactivos') }}" class="btn-Eliminar my-1 text-white text-center ">Lista
                de
                estudiantes inhabilitados</a>

        </div>
        <div class="pl-5">
            <input wire:model="search" type="text" class="inputs w-1/2 " placeholder="Introduzca un curso" name="" id="">
        </div>
        @if ($estudiantes->count())
            <div class="card-body">
                <table class="table table-striped text-black">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>PRIMER APELLIDO</th>
                            <th>SEGUNDO APELLIDO</th>

                            <th colspan="2">ACCIONES</th>

                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($estudiantes as $estudiante)

                            <tr>
                                <td><a
                                        href="{{ route('admin.estudiantes.show', $estudiante) }}">{{ $estudiante->id }}</a>
                                </td>
                                <td><a href="{{ route('admin.estudiantes.show', $estudiante) }}">
                                        {{ $estudiante->user->name }}</a></td>
                                <td><a href="{{ route('admin.estudiantes.show', $estudiante) }}">
                                        {{ $estudiante->user->primer_ap }}</a></td>
                                <td><a href="{{ route('admin.estudiantes.show', $estudiante) }}">
                                        {{ $estudiante->user->segundo_ap }}</a></td>
                                <td width="30px"><a href="{{ route('admin.estudiantes.edit', $estudiante) }}"
                                        class="btn btn-info btn-sm">Editar</a>
                                </td>
                                <td width="30px">
                                    <form action="{{ route('admin.estudiantes.desactivar', $estudiante) }}"
                                        method="POST">
                                        @csrf
                                        @method('put')
                                        <input class="btn btn-danger btn-sm" type="submit" value="Desabilitar">
                                    </form>
                                </td>


                            </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="p-3 bg-gray-300">
                {{ $estudiantes->links() }}
            </div>
        @else
            <div class="card-body">
                <strong class="text-black">No hay ningún registro...</strong>
            </div>

        @endif



    </div>
 --}}


@stop



@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
