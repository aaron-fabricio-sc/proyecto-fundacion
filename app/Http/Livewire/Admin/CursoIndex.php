<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Curso;
use Livewire\WithPagination;

class CursoIndex extends Component
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
        $cursos = Curso::where('estado', 1)
            ->where('nombre', 'LIKE', '%' . $this->search . '%')
            ->latest('id')->paginate();
        return view('livewire.admin.curso-index', compact('cursos'));
    }
}
