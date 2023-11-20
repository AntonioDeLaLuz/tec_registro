<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publications extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'sub_title',
        'formas_uso',
        'distribucion',
        'descripcion',
        'usos',
        'activos',  
        'urlimg'  
    ];

    // Obtener los comentarios
    public function comentarios(){
        // Una publicacion puede tener multiples comentarios
        // return $this->hasMany(Comentario::class)->join('users', 'users.id', '=', 'comentarios.user_id')->where('validacion', 1)->get();
        return $this->hasMany(Comentario::class)->join('users', 'users.id', '=', 'comentarios.user_id')->where('validacion', 1)->select('users.name','users.lastnameP','users.lastnameM', 'comentarios.comentario','comentarios.created_at')->get();
    }
    // Función de likes
    public function likes(){
        return $this->hasMany(Like::class);
    }
    // Revisar si ya tiene like
    public function checkLike(?User $user)
    {
        if ($user) {
            return $this->likes->contains('user_id', $user->id);
        }
        return false;
    }
}
    