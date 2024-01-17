<?php

namespace App\Http\Livewire\Tienda;

use App\Models\Tienda;
use Livewire\Component;

class NavTiendas extends Component
{   public $tienda;
    public function mount($tienda_id){
        $this->tienda=Tienda::find($tienda_id);
    }
    public function render()
    {
        return view('livewire.tienda.nav-tiendas');
    }
}
