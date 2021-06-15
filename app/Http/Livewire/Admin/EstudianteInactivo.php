<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Estudiante;
use Livewire\WithPagination;

class EstudianteInactivo extends Component
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
        $estudiantes = Estudiante::where('estado', 0)->latest('id')->paginate(6);
        return view('livewire.admin.estudiante-inactivo', compact('estudiantes'));
    }
}
