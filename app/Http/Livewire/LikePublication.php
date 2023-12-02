<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LikePublication extends Component
{
    public $publication;
    public $isLiked;
    public $likes;

    // Se ejecuta automatica
    public function mount($publication)
    {
        // Verifica si ya tiene o no
        $this->isLiked = $publication->checkLike(auth()->user());
        // el contador
        $this->likes = $publication->likes->count();
    }

    public function click()
    {
        if ($this->publication->checkLike(auth()->user())) {
            $this->publication->likes()->where('evento_id', $this->publication->id)->delete();
            $this->isLiked = false;
            $this->likes--;
        } else {
            $this->publication->likes()->create([
                'user_id' => auth()->user()->id
            ]);
            $this->isLiked = true;
            $this->likes++;
        }
    }

    public function render()
    {
        return view('livewire.like-publication');

    }
}
