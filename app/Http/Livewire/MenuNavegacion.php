<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;

class MenuNavegacion extends Component
{
    public function render()
    {
        $categorias = Categoria::where('estado', 1)->get();
        return view('livewire.menu-navegacion', compact('categorias'));
    }
}
