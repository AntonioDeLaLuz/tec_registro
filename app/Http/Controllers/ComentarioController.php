<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Comentario;
use App\Models\Publications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentarioController extends Controller
{
    //
    public function store(Request $request, Evento $evento)
    {
        $this->validate($request, [
            'comentario' => 'required | min:5 | max:255',
        ]);
        Comentario::create([
            'user_id' => auth()->user()->id,
            'evento_id' => $evento->id,
            'comentario' => $request->comentario,
            'validacion' => $request->validacion,
        ]);
        //  regresar a la pagina anterior
        return back()->with('mensaje', 'Comentario estara en proceso de validación');
    }

    public function destroy(Comentario $comentario){
        $comentario->delete();
        $comentarios = Comentario::all();
        return redirect()->route('admin.comentarios', ['comentarios' => $comentarios]);
    }
    public function update(Comentario $comentario){
        $comentario->update([
            'validacion'=>'1'
        ]);
        return back();
        // $comentarios = DB::table('comentarios')->join('users', 'users.id', '=', 'comentarios.user_id')->join('eventos', 'eventos.id', '=', 'comentarios.evento_id')->select('comentarios.id', 'users.name', 'users.lastnameP', 'users.lastnameM', 'comentarios.comentario', 'eventos.title as eventos_title')->where('validacion', 0)->orderBy('id', 'asc')->get();
        // return view('admin.comentarios', ['comentarios' => $comentarios]);
    }
}
