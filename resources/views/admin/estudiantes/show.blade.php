@extends('adminlte::page')
@section('title', 'Estudiante ' . $estudiante->user->name)

@section('content_header')
    <h1 class="text-gray-700">Detalles del Profesor</h1>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('content')
    <div class="card w-full md:w-1/2 m-auto ">
        <div class="card-header p-4 flex ">
            <a href="{{ route('admin.estudiantes.edit', $estudiante) }}"
                class="btn-Modificar text-white text-center w-1/3">Editar
                Estudiante</a>
            <form action="{{ route('admin.estudiantes.desactivar', $estudiante) }}" method="POST">
                @csrf
                @method('put')
                <input class="btn-Eliminar text-white text-center" type="submit" value="Desabilitar">
            </form>


        </div>
        <div class="card-body pl-4">
            <div class="my-2">
                <h1 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg ">Nombre:
                    </span>
                    {{ $estudiante->user->name }} </h1>
            </div>
            <div class="my-2">
                <h1 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg ">Primer apellido:
                    </span>
                    {{ $estudiante->user->primer_ap }} </h1>
            </div>
            <div class="my-2">

                <h3 class="text-gray-800 "><span class="text-lg  font-bold text-green-700">Segundo apellido </span>
                    {{ $estudiante->user->segundo_ap }}</h3>
            </div>
            <div class="my-2">
                <h3 class="text-gray-800 "><span class="text-lg  font-bold text-green-700">Gestion : </span>
                    {{ $estudiante->gestion }}</h3>
            </div>
            <div class="my-2">
                <h3 class="text-gray-800 "><span class="text-lg  font-bold text-green-700">Semestre : </span>
                    {{ $estudiante->semestre }}</h3>
            </div>
        </div>
    </div>
@stop

@section('js')

@stop
