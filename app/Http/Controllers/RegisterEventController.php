<?php

namespace App\Http\Controllers;

use App\Models\UserEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterEventController extends Controller
{
    //
    public function create(){
        return view('auth.createRegisterEvent');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:20',
            'lastnameP'=>['required','min:5','max:20'],
            'lastnameM'=>['required','min:5','max:20'],
            'email'=>['required','min:10','unique:users'],
            'password'=>['required','min:9','confirmed'],
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
        UserEvent::create([
            'name'=>$request->name,
            'lastnameP'=>$request->lastnameP,
            'lastnameM'=>$request->lastnameM,
            'email'=>$request->email,
            'type'=>$request->type,
            'password'=>Hash::make($request->password),
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
         // Otra forma de autenticar
         auth()->attempt($request->only('email','password'));

         // Redireccionar
         return redirect()->route('register.login');
    }
}
