<div class="card">
    <div class="card-header flex">
        <a href="{{ route('admin.cursos.create') }}" class="boton text-white text-center w-1/3">Crear Nuevo
            Curso</a>

        <a href="{{ route('admin.cursos.index') }}" class="boton my-1 text-white text-center ">Lista
            de
            cursos</a>

    </div>
    <div class="pl-5">
        <input wire:model="search" type="text" class="inputs w-1/2 " placeholder="Introduzca un curso" name="" id="">
    </div>
    @if ($cursos->count())
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

                            <td width="30px">
                                <form action="{{ route('admin.cursos.activar', $curso) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <input class="btn btn-primary btn-sm" type="submit" value="Activar">
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
    @else
        <div class="card-body">
            <strong class="text-black">No hay ningún registro...</strong>
        </div>

    @endif



</div>
