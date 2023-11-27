<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    //
    public function index (){
        return view('events.index');
    }
    
    public function show(Evento $evento){
        $paginateEventos= DB::table('publications')->limit(5)->paginate(3);
        return view('events.profile',['evento'=>$evento,'paginateEventos'=>$paginateEventos]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'title'=>' required | min:3 | max:255',
            'sub_title'=>'required | min:5 | max:255',
            'author'=>'required | min:5 | max:255',
            'descripcion'=>'required | min:5 | max:255',
            'urlimg'=>'required'
        ]);
        Evento::create([
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'author'=>$request->author,
            'descripcion'=>$request->descripcion,
            'urlimg'=>$request->urlimg
         ]);
        return redirect()->route('admin.eventos');
    }
    public function destroy(Evento $evento){
        $evento->delete();
        $eventos=Evento::all();
        return redirect()->route('admin.eventos',['eventos'=>$eventos]);
    }
     public function edit(Evento $evento){
        return view('events.edit',['evento'=>$evento]);
     }
     public function update(Evento $evento, Request $request){
         $this->validate($request,[
             'title'=>' required | min:3 | max:255',
             'sub_title'=>'required | min:5 | max:255',
             'author'=>'required | min:5 | max:255',
             'descripcion'=>'required | min:5 | max:255',
             'urlimg'=>'required'
         ]);
         $evento->update([
            'title'=>$request->title,
            'sub_title'=>$request->sub_title,
            'author'=>$request->author,
            'descripcion'=>$request->descripcion,
            'urlimg'=>$request->urlimg
          ]);
        $eventos=Evento::all();
        return redirect()->route('admin.eventos',['eventos'=>$eventos]);
     }
}
