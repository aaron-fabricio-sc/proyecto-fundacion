<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class CursoCategoryComponent extends Component

{
    public $categorias;
    use WithPagination;

    public function mount($data,)
    {
        $this->categorias = $data;
    }
    public function render()
    {

        return view('livewire.curso-category-component');
    }
}
