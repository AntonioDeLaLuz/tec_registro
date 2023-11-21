<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use App\Models\Register;
use Illuminate\Http\Request;

class UserRegisterInEventController extends Controller
{
    //
    public function store(Request $request, Publications $publication)
    {
        Register::create([
            'user_id' => auth()->user()->id,
            'publications_id' => $publication->id,
        ]);
        //  regresar a la pagina anterior
        return back()->with('mensaje', 'Tu registro ha sido procesado');
    }

    public function destroy(Register $register){
        $register->delete();
        $registers = Register::all();
        return redirect()->route('admin.registerEvent', ['register' => $registers]);
    }
    public function update(Register $register){
        $register->update([
            'validacion'=>'1'
        ]);
        return back();
    }
}
