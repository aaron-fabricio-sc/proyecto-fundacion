<x-app-layout>
    {{-- <div class="container bg-gray-200  mx-auto px-2 sm:px-6 lg:px-8 text-black py-4">
        <div class="grid grid-cols-4 gap-5">
            @foreach ($cursoActivo as $curso)
                <div class="shadow p-5 bg-gray-300 rounded-lg">
                    <a href="{{ route('cursos.show', $curso) }}">
                        <b>Nombre:</b> <span
                            class="font-bold text-green-600 underline hover:text-green-800">{{ $curso->nombre }}</span>
                    </a>
                    <p>
                        <b>Descripción: </b> {{ $curso->descripcion }}
                    </p>
                    <h2>

                        <b>Categoria: </b> <a href="#"
                            class="font-bold text-green-600 underline hover:text-green-800">{{ $curso->categoria->nombre }}</a>

                    </h2>
                </div>



            @endforeach
        </div>
        <div class="mt-5 p-4">
            {{ $cursoActivo->links() }}
        </div>

    </div> --}}
    <livewire:curso-component />


</x-app-layout>
