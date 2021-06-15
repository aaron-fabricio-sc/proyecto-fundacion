 <div class="card">
     <div class="card-header flex">
         <a href="{{ route('admin.profesores.create') }}" class="boton text-white text-center w-1/3">Crear nuevo
             profesor</a>

         <a href="{{ route('admin.profesores.inactivos') }}" class="btn-Eliminar my-1 text-white text-center ">Lista
             de
             profesores inhabilitados</a>

     </div>
     <div class="pl-5">
         <input wire:model="search" type="text" class="inputs w-1/2 " placeholder="Introduzca la especialidad" name=""
             id="">
     </div>
     @if ($profesores->count())
         <div class="card-body">
             <table class="table table-striped text-black">
                 <thead>
                     <tr>
                         <th>ID</th>
                         <th>NOMBRE</th>
                         <th>PRIMER APELLIDO</th>
                         <th>ESPECIALIDAD</th>

                         <th colspan="2"></th>

                     </tr>
                 </thead>
                 <tbody class="text-gray-700">
                     @foreach ($profesores as $profesor)
                         <tr>
                             <td><a href="{{ route('admin.profesores.show', $profesor) }}">{{ $profesor->id }}</a>
                             </td>
                             <td><a
                                     href="{{ route('admin.profesores.show', $profesor) }}">{{ $profesor->user->name }}</a>
                             </td>
                             <td><a
                                     href="{{ route('admin.profesores.show', $profesor) }}">{{ $profesor->user->primer_ap }}</a>
                             </td>
                             <td><a
                                     href="{{ route('admin.profesores.show', $profesor) }}">{{ $profesor->especialidad }}</a>
                             </td>

                             <td width="30px"><a href="{{ route('admin.profesores.edit', $profesor) }}"
                                     class="btn btn-info btn-sm">Editar</a>
                             </td>
                             <td width="30px">
                                 <form action="{{ route('admin.profesores.desactivar', $profesor) }}" method="POST">
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
             {{ $profesores->links() }}
         </div>


     @else
         <div class="card-body">
             <strong class="text-black">No hay ningún registro...</strong>
         </div>

     @endif

 </div>
