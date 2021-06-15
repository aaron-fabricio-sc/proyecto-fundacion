@extends('adminlte::page')
@section('title', 'Lista de las categoría')

@section('content_header')
    <h1 class="text-gray-700">Lista de las categoría</h1>
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

    @livewire('admin.categoria-index')
    {{-- <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.categorias.create') }}" class="boton text-white text-center w-1/3">Crear Nueva
                Categoría</a>
        </div>
        <div class="card-body">
            <table class="table table-striped text-black">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th colspan="2"></th>

                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($category as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nombre }}</td>
                            <td width="30px"><a href="{{ route('admin.categorias.edit', $categoria) }}"
                                    class="btn btn-info btn-sm">Editar</a>
                            </td>
                            <td width="30px">
                                <form action="{{ route('admin.categorias.desactivar', $categoria) }}" method="POST">
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
    </div> --}}

@stop



@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
