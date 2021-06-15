<x-app-layout>
    <div class="container grid grid-cols-3 gap-5 m-auto text-black">
        <div class="col-span-2  ">
            <div class="bg-gray-300  p-4 rounded-lg">
                <div class="p-5 ">
                    <p class="text-red-600 font-bold text-xl underline mb-3">Acciones</p>
                    <a href="#" class="btn-Modificar">Editar</a>
                    <a href="#" class="btn-Eliminar">Eliminar</a>

                </div>
                <div>
                    <h1 class="my-1"><span class="md:text-xl text-green-700">Nombre: </span> {{ $curso->nombre }}</h1>
                    <p class="my-1"><span class="md:text-xl text-green-700">Descripción:
                        </span>{{ $curso->descripcion }}
                    </p>
                    <h2><span class="md:text-xl text-green-700">Categoria:</span> {{ $curso->categoria->nombre }}</h2>
                </div>
            </div>



        </div>
        <div class="col-span-1 bg-gray-300 p-4 rounded-lg">
            <h3 class="text-green-800 text-xl font-bold text-center">Cursos Relacionados:</h3>
            <div class="p-6">
                <ul>
                    @foreach ($relacionados as $relacion)
                        <li class="shadow-xl mb-4 rounded-xl border border-gray-400 p-3"><a href=""><span
                                    class="md:text-xl text-green-700">Nombre:
                                </span> {{ $relacion->nombre }} <br>
                                <span class="md:text-xl text-green-700">Descripción: </span>
                                {{ $relacion->descripcion }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>
