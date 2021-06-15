<div class="card">
    <div class="card-header flex">
        <a href="{{ route('admin.estudiantes.create') }}" class="boton text-white text-center w-1/3">Crear Nuevo
            Estudiante</a>

        <a href="{{ route('admin.estudiantes.index') }}" class="boton my-1 text-white text-center ">Lista
            de
            estudiantes habilitados</a>

    </div>
    <div class="pl-5">
        <input wire:model="search" type="text" class="inputs w-1/2 " placeholder="Introduzca un curso" name="" id="">
    </div>
    @if ($estudiantes->count())
        <div class="card-body">
            <table class="table table-striped text-black">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>PRIMER APELLIDO</th>
                        <th>SEGUNDO APELLIDO</th>

                        <th colspan="2">ACCIONES</th>

                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($estudiantes as $estudiante)

                        <tr>
                            <td><a
                                    href="{{ route('admin.estudiantes.show', $estudiante) }}">{{ $estudiante->id }}</a>
                            </td>
                            <td><a href="{{ route('admin.estudiantes.show', $estudiante) }}">
                                    {{ $estudiante->user->name }}</a></td>
                            <td><a href="{{ route('admin.estudiantes.show', $estudiante) }}">
                                    {{ $estudiante->user->primer_ap }}</a></td>
                            <td><a href="{{ route('admin.estudiantes.show', $estudiante) }}">
                                    {{ $estudiante->user->segundo_ap }}</a></td>

                            <td width="30px">
                                <form action="{{ route('admin.estudiantes.activar', $estudiante) }}" method="POST">
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
            {{ $estudiantes->links() }}
        </div>
    @else
        <div class="card-body">
            <strong class="text-black">No hay ningún registro...</strong>
        </div>

    @endif



</div>
