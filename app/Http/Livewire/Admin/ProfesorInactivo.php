<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Profesore;

use Livewire\WithPagination;

class ProfesorInactivo extends Component
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
        $profesores = Profesore::where('estado', 0)->where("especialidad", 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(6);
        return view('livewire.admin.profesor-inactivo', compact('profesores'));
    }
}
