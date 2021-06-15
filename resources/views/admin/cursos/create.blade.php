@extends('adminlte::page')
@section('title', 'Crear nuevo curso')

@section('content_header')
    <h1 class="text-gray-700">Crear nuevo curso</h1>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.cursos.store', 'autocomplete' => 'off']) !!}
            @include('admin.cursos.partials.form')
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
