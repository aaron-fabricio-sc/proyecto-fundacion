 <div class="card">


     <div class="card-header">
         <a href="{{ route('admin.categorias.create') }}" class="boton text-white text-center w-1/3">Crear Nueva
             Categoría</a>
     </div>
     <div class="pl-5">
         <input wire:model="search" type="text" class="inputs w-1/2 " placeholder="Introduzca una categoría" name=""
             id="">
     </div>
     @if ($categorias->count())

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
                     @foreach ($categorias as $categoria)
                         <tr>
                             <td>{{ $categoria->id }}</td>
                             <td>{{ $categoria->nombre }}</td>

                             <td width="30px">
                                 <form action="{{ route('admin.categorias.activar', $categoria) }}" method="POST">
                                     @csrf
                                     @method('put')
                                     <input class="btn boton btn-sm" type="submit" value="Activar">
                                 </form>
                             </td>


                         </tr>
                     @endforeach
                 </tbody>
             </table>
         </div>
         <div class="p-3 bg-gray-300">
             {{ $categorias->links() }}
         </div>

     @else
         <div class="card-body">
             <strong class="text-black">No hay ningún registro...</strong>
         </div>
     @endif


 </div>
