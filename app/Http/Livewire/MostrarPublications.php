<?php

namespace App\Http\Livewire;

use App\Models\Evento;
use App\Models\Publications;
use Livewire\Component;

class MostrarPublications extends Component
{
       // Declarar que debe escuchar ciertas funciones
       protected $listeners=['eliminarPublication'];

       public function eliminarPublication(Publications $publication){
           // dd($vacante->name);
           $publication->delete();
           // $resultado= Vacante::deleted($vacante_id);
           
       }
   
    public function render()
    {
        $eventos=Evento::where('id','>',0)->paginate(10);
        return view('livewire.mostrar-publications',[
            'eventos'=>$eventos
        ]);
    }
}
