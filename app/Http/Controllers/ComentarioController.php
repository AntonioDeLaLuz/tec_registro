<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Publications;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    //
    public function store(Request $request, Publications $publication)
    {
        $this->validate($request, [
            'comentario' => 'required | min:5 | max:255',
        ]);
        Comentario::create([
            'user_id' => auth()->user()->id,
            'publications_id' => $publication->id,
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
    }
}
