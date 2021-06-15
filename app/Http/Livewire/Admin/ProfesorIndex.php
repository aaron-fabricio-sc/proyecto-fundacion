<?php

namespace App\Http\Livewire\Admin;

use App\Models\Profesore;
use Livewire\Component;
use Livewire\WithPagination;

class ProfesorIndex extends Component
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


        $profesores = Profesore::where('estado', 1)->where("especialidad", 'LIKE', '%' . $this->search . '%')->latest('id')->paginate(6);
        return view('livewire.admin.profesor-index', compact('profesores'));
    }
}
