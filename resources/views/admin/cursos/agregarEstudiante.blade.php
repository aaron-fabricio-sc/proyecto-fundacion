@extends('adminlte::page')
@section('title', 'Agregar Estudiante al curso ' . $curso->nombre)

@section('content_header')
    <h1 class="text-gray-700">Agregar Estudiante al curso {{ $curso->nombre }}</h1>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.cursos.agregarEstudiante', 'autocomplete' => 'off']) !!}


            <div class="form-group">
                {!! Form::label('lista', 'Lista de los estudiantes', ['class' => 'labels text:sm md:text-md']) !!}
                {!! Form::select('lista', $listaEstudiantes, null, ['class' => 'inputs w-1/2']) !!}
                @error('lista')
                    <div class="text-red-700 font-bold">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="form-group">
                {!! Form::submit('Crear', ['class' => 'boton w-1/3']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

    </script>

@stop
