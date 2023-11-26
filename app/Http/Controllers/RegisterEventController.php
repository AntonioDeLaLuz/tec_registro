<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use App\Models\RegisterEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterEventController extends Controller
{
    //
    public function create(){
        return view('auth.createRegisterEvent');
    }
    public function store(Request $request, Publications $publication){
        $this->validate($request,[
            'nombreCA'=>['required','min:5','max:100'],
            'lider'=>['required','min:5','max:100'],
            'instituto'=>['required'],
            'grado'=>['required'],
            'colaborador_1'=>['max:100'],
            'colaborador_2'=>['max:100'],
            'colaborador_3'=>['max:100'],
            'colaborador_4'=>['max:100'],
            'colaborador_5'=>['max:100'],
            'colaborador_6'=>['max:100']
        ]);

        // dd('creando usuario');
        RegisterEvent::create([
            'user_id' => auth()->user()->id,
            'publications_id' => $publication->id,
            'nombreCA'=>$request->nombreCA,
            'lider'=>$request->lider,
            'instituto'=>$request->instituto,
            'grado'=>$request->grado,
            'colaborador_1'=>$request->colaborador_1,
            'colaborador_2'=>$request->colaborador_2,
            'colaborador_3'=>$request->colaborador_3,
            'colaborador_4'=>$request->colaborador_4,
            'colaborador_5'=>$request->colaborador_5,
            'colaborador_6'=>$request->colaborador_6
        ]);
        //  regresar a la pagina anterior
        return view('publications.profile',['publication'=>$publication]);
    }
    public function destroy(RegisterEvent $register_event){
        $register_event->delete();
        $registers_event = RegisterEvent::all();
        return redirect()->route('admin.registerEvent', ['registers_event' => $registers_event]);
    }
    public function update(RegisterEvent $register_event){
        $register_event->update([
            'validacion'=>'1'
        ]);
        return back();
    }
}
