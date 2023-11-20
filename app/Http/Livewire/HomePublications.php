<?php

namespace App\Http\Livewire;


use App\Models\Publications;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class HomePublications extends Component
{
    public $termino;
      // Cuando se invoque la función terminos busqueda del emit accionar la función buscar
      protected $listeners=['terminosBusqueda'=>'buscar'];

      public function buscar($termino){
          $this->termino=$termino;
      }

    public function render()
    {
          // $vacantes=Vacante::all();
          $publications=Publications::when($this->termino, function ($query){
            $query->where('name', 'LIKE', '%' . $this->termino . "%");
        })->when($this->termino, function ($query){
            $query->orWhere('sub_title', 'LIKE', '%' . $this->termino . "%");
        })->get();

        return view('livewire.home-publications',['publications'=>$publications]);
    }
}
