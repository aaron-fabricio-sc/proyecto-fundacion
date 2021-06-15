<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Estudiante;
use Livewire\WithPagination;

class EstudianteIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {

        $estudiantes = Estudiante::where('estado', 1)->where('gestion', 'LIKE', '%' . $this->search . '%')->where('semestre', 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(6);

        return view('livewire.admin.estudiante-index', compact('estudiantes'));
    }
}
