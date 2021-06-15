@extends('adminlte::page')
@section('title', 'Lista de estudiantes')

@section('content_header')
    <h1 class="text-gray-700">Lista de estudiantes del curso {{ $cursoestudiante->nombre }}</h1>
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



    <div class="card">
        <div class="card-header flex">
            <a href="{{ route('admin.cursos.index') }}" class="boton text-white text-center w-1/3">Lista de los
                cursos</a>

            <a href="{{ route('admin.cursos.inactivos') }}" class="btn-Eliminar my-1 text-white text-center ">Lista
                de
                cursos inhabilitados</a>

        </div>
        <div class="pl-5">
            <input wire:model="search" type="text" class="inputs w-1/2 " placeholder="Introduzca un curso" name="" id="">
        </div>

        <div class="card-body">
            <table class="table table-striped text-black">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PRIMER APELLIDO</th>
                        <th>SEGUNDO APELLIDO</th>
                        <th>GESTION</th>
                        <th>SEMESTRE</th>
                        <th colspan="2">ACCIONES</th>




                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($listaDeEstudiantes as $listaDeEstudiante)

                        <tr>
                            <td>
                                <a href="{{ route('admin.estudiantes.show', $listaDeEstudiante) }}">
                                    {{ $listaDeEstudiante->id }}</a>
                            </td>
                            <td>
                                <p>
                                    {{ $listaDeEstudiante->user->name }} </p>
                            </td>
                            <td>
                                <p>
                                    {{ $listaDeEstudiante->user->primer_ap }} </p>
                            </td>
                            <td>
                                <p>
                                    {{ $listaDeEstudiante->user->segundo_ap }} </p>
                            </td>
                            <td>
                                <p>
                                    {{ $listaDeEstudiante->gestion }} </p>
                            </td>
                            <td>
                                <p>
                                    {{ $listaDeEstudiante->semestre }} </p>
                            </td>


                            <td width="30px"><a href="{{ route('admin.notas.crear', $listaDeEstudiante) }}"
                                    class="btn btn-info btn-sm">Registar Nota</a>
                            </td>
                            <td width="30px"><a href="{{ route('admin.notas.show', $listaDeEstudiante) }}"
                                    class="btn btn-info btn-sm">Ver nota</a>
                            </td>
                        </tr>


                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-3 bg-gray-300">
            {{ $listaDeEstudiantes->links() }}
        </div>





    </div>


@stop



@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
