@extends('adminlte::page')
@section('title', 'Editar categoría')

@section('content_header')
    <h1 class="text-gray-700">Editar categoría</h1>
@stop
@section('css')
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
        <div class="card-body">
            {!! Form::model($categoria, ['route' => ['admin.categorias.update', $categoria], 'autocomplete' => 'off', 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('nombre', 'Nombre de la categoría', ['class' => 'labels text:sm md:text-md']) !!}
                {!! Form::text('nombre', null, ['class' => 'inputs w-1/2', 'placeholder' => 'Ingrese el nombre']) !!}

                @error('nombre')
                    <div class="text-red-700 font-bold">
                        {{ $message }}

                    </div>
                @enderror
            </div>
            <div class="form-group">
                {!! Form::label('slug', 'Slug', ['class' => 'labels text:sm md:text-md']) !!}
                {!! Form::text('slug', null, ['class' => 'inputs w-1/2', 'readonly']) !!}
                @error('slug')
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
