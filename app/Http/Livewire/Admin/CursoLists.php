<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Curso;
use App\Models\Estudiante;

class CursoLists extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render(Curso $id_curso)
    {
        $listaDeEstudiantes = Estudiante::where("curso_id", $id_curso)->paginate(6);
        return view('livewire.admin.curso-lists', compact('listaDeEstudiantes'));
    }
}
