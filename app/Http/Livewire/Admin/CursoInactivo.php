<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Curso;
use Livewire\WithPagination;

class CursoInactivo extends Component
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
        $cursos = Curso::where('estado', 0)
            ->where('nombre', 'LIKE', '%' . $this->search . '%')
            ->latest('id')->paginate(8);
        return view('livewire.admin.curso-inactivo', compact('cursos'));
    }
}
