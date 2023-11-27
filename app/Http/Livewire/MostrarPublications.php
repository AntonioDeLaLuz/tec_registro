<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use App\Models\Publications;
use Livewire\Component;

class MostrarPublications extends Component
{
       protected $listeners=['eliminarEvento'];
       public function eliminarEvento(Evento $evento){
           $evento->delete();
       }
   
    public function render()
    {
        $eventos=Evento::where('id','>',0)->paginate(10);
        return view('livewire.mostrar-publications',[
            'eventos'=>$eventos
        ]);
    }
}
