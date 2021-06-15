<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Categoria;
use Livewire\WithPagination;

class CategoriaIndex extends Component
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
        $categorias = Categoria::where('estado', 1)
            ->where('nombre', 'LIKE', '%' . $this->search . '%')
            ->latest('id')->paginate(6);

        return view('livewire.admin.categoria-index', compact('categorias'));
    }
}
