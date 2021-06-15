@extends('adminlte::page')
@section('title', 'Lista de los profesores')

@section('content_header')
    <h1 class="text-gray-700">Lista de los profesores</h1>
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

    @livewire('admin.profesor-index')

@stop



@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
