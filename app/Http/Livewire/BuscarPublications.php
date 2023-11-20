<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BuscarPublications extends Component
{
    public $termino;

    public function leerDatosFormulario(){
        $this->emit('terminosBusqueda',$this->termino);    
    }
    
    public function render()
    {
        return view('livewire.buscar-publications');
    }
}
