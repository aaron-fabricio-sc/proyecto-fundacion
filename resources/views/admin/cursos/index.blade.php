@extends('adminlte::page')
@section('title', 'Lista de cursos')

@section('content_header')
    <h1 class="text-gray-700">Lista de los cursos</h1>
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

    @livewire('admin.curso-index')
    {{-- <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.cursos.create') }}" class="boton text-white text-center w-1/3">Crear Nuevo
                Curso</a>
        </div>
        <div class="card-body">
            <table class="table table-striped text-black">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE CURSO</th>
                        <th colspan="2">ACCIONES</th>

                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($cursos as $curso)

                        <tr>
                            <td><a href="{{ route('admin.cursos.show', $curso) }}">{{ $curso->id }}</a> </td>
                            <td><a href="{{ route('admin.cursos.show', $curso) }}"> {{ $curso->nombre }}</a></td>
                            <td width="30px"><a href="{{ route('admin.cursos.edit', $curso) }}"
                                    class="btn btn-info btn-sm">Editar</a>
                            </td>
                            <td width="30px">
                                <form action="{{ route('admin.cursos.desactivar', $curso) }}" method="POST">
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
            {{ $cursos->links() }}
        </div>
    </div> --}}

@stop



@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
