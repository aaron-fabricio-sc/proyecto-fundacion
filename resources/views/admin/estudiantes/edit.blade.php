@extends('adminlte::page')
@section('title', 'Actualizar el estudiante')

@section('content_header')
    <h1 class="text-gray-700">Actualizar el estudiante {{ $estudiante->user->name }} {{ $estudiante->user->primer_ap }}
    </h1>
@stop
@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@stop
@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::model($estudiante, ['route' => ['admin.estudiantes.update', $estudiante], 'autocomplete' => 'off', 'method' => 'put']) !!}
            @include('admin.estudiantes.partials.form')
            <div class="form-group">
                {!! Form::submit('Actualizar', ['class' => 'boton w-1/3']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>



@stop
