@extends('adminlte::page')
@section('title', 'Curso' . $curso->nombre)

@section('content_header')
    <h1 class="text-gray-700">Detalles del Curso</h1>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('content')
    <div class="card w-full md:w-1/2 m-auto ">
        <div class="card-header p-4 flex ">
            <a href="{{ route('admin.cursos.edit', $curso) }}" class="btn-Modificar text-white text-center w-1/3">Editar
                Curso</a>
            <form action="{{ route('admin.cursos.desactivar', $curso) }}" method="POST">
                @csrf
                @method('put')
                <input class="btn-Eliminar text-white text-center" type="submit" value="Desabilitar">
            </form>


        </div>
        <div class="card-body pl-4">
            <div class="my-2">
                <h1 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg ">Curso de :
                    </span>
                    {{ $curso->nombre }} </h1>
            </div>
            <div class="my-2">

                <h3 class="text-gray-800 "><span class="text-lg  font-bold text-green-700">Categoria : </span>
                    {{ $curso->categoria->nombre }}</h3>
            </div>
            <div class="my-2">
                <h3 class="text-gray-800 "><span class="text-lg  font-bold text-green-700">Descripción : </span>
                    {{ $curso->descripcion }}</h3>
            </div>
        </div>
    </div>
@stop

@section('js')

@stop
