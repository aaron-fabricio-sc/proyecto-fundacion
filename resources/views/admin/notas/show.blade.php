@extends('adminlte::page')
@section('title', 'Notas')

@section('content_header')
    <h1 class="text-gray-700">Detalles de las notas del estudiante {{ $listaNota[0]->estudiante->user->primer_ap }}</h1>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('content')
    <div class="card w-full md:w-1/2 m-auto ">
        <div class="card-header p-4 flex ">
            <a href="{{ route('admin.notas.create') }}" class="btn-Modificar text-white text-center w-1/3">Registrar
                Nota</a>
            {{-- <form action="{{ route('admin.cursos.desactivar', $curso) }}" method="POST">
                @csrf
                @method('put')
                <input class="btn-Eliminar text-white text-center" type="submit" value="Desabilitar">
            </form> --}}


        </div>
        @foreach ($listaNota as $list)
            <div class="card-body pl-4 border-t border-gray-500">
                <h3 class="text-gray-800  text-center font-bold  "><span class="font-bold text-green-700 text-lg">
                        Curso : </span>{{ $list->curso->nombre }}</h3>
                <div class="flex justify-evenly">
                    <h3 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg">Gestion :
                        </span> {{ $list->gestion }}</h3>
                    <h3 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg">Semestre :
                        </span> {{ $list->semestre }}</h3>
                </div>

                <div class="my-2">
                    <h3 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg ">Usuario que registró la
                            nota:
                        </span>
                        {{ $list->user->name }} {{ $list->user->primer_ap }} </h3>
                </div>
                <div class="my-2">
                    <h1 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg ">Nombre:
                        </span>
                        {{ $list->estudiante->user->name }} </h1>
                </div>
                <div class="my-2">
                    <h1 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg ">Primer Apellido:
                        </span>
                        {{ $list->estudiante->user->primer_ap }} </h1>
                </div>
                <div class="my-2">
                    <h1 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg ">Segundo Apellido:
                        </span>
                        {{ $list->estudiante->user->segundo_ap }} </h1>
                </div>
                <div class="my-2">
                    <h1 class="text-gray-800 "><span class=" font-bold text-green-700 text-lg ">Primera Práctica:
                        </span>
                        {{ $list->practica_1 }} </h1>
                </div>

                <div class="my-2">

                    <h3 class="text-gray-800 "><span class="text-lg  font-bold text-green-700">Segunda Práctica : </span>
                        {{ $list->practica_2 }}</h3>
                </div>
                <div class="my-2">
                    <h3 class="text-gray-800 "><span class="text-lg  font-bold text-green-700">Tercera Práctica : </span>
                        {{ $list->practica_3 }}</h3>
                </div>
                <div class="my-2">
                    <h3 class="text-gray-800 "><span class="text-lg  font-bold text-green-700">Nota Final : </span>
                        {{ $list->nota_final }}</h3>
                </div>
            </div>
        @endforeach

    </div>
@stop

@section('js')

@stop
