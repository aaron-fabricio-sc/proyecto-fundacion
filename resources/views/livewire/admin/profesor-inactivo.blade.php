 <div class="card">


     <div class="card-header flex">
         <a href="{{ route('admin.profesores.create') }}" class="boton text-white text-center w-1/3">Crear Nuevo
             Profesor</a>
         <a href="{{ route('admin.profesores.index') }}" class="boton text-white  text-center w-1/3">Lista
             de
             profesores</a>
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
                             <td>{{ $profesor->id }}</td>
                             <td>{{ $profesor->user->name }}</td>
                             <td>{{ $profesor->user->primer_ap }}</td>
                             <td>{{ $profesor->especialidad }}</td>


                             <td width="30px">
                                 <form action="{{ route('admin.profesores.activar', $profesor) }}" method="POST">
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
             {{ $profesores->links() }}
         </div>

     @else
         <div class="card-body">
             <strong class="text-black">No hay ningún registro...</strong>
         </div>
     @endif


 </div>
