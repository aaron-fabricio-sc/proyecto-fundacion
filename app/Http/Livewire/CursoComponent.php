<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use Livewire\Component;
use App\Models\Curso;

use Livewire\WithPagination;


class CursoComponent extends Component
{
    use WithPagination;
    public function render()
    {


        $cursoActivo = Curso::where('estado', 1)->latest('id')->paginate(8);
        /*     return view('cursos.index', compact('cursoActivo')); */

        return view('livewire.curso-component', compact('cursoActivo'));
    }
}
