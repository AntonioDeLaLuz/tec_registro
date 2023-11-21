<?php

namespace App\Http\Controllers;

use App\Models\Publications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicationsController extends Controller{

    public function index(){
        $publications=Publications::all();
        return view('publications.catalogue',['publications'=>$publications]);
    }
    

    public function show(Publications $publication){
        // $paginatePublications=Publications::paginate(3);
        $paginatePublications= DB::table('publications')->limit(6)->paginate(3);
        // return view('publications.profile',['publication'=>$publication]);
        return view('publications.profile',['publication'=>$publication,'paginatePublications'=>$paginatePublications]);
    }

    public function create(){
        return view('publications.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>' required | min:3 | max:255',
            'sub_title'=>'required | min:5 | max:255',
            'formas_uso'=>'required | min:5 | max:255',
            'descripcion'=>'required | min:5 | max:255',
            'urlimg'=>'required'
        ]);
        Publications::create([
            'name'=>$request->name,
            'sub_title'=>$request->sub_title,
            'formas_uso'=>$request->formas_uso,
            'descripcion'=>$request->descripcion,
            'urlimg'=>$request->urlimg
         ]);
        return redirect()->route('publications.catalogue');
    }
    public function destroy(Publications $publication){
        $publication->delete();
        $publications=Publications::all();
        return redirect()->route('admin.publications',['publications'=>$publications]);
    }
     public function edit(Publications $publication){
         return view('publications.edit',['publication'=>$publication]);
     }
     public function update(Publications $publication, Request $request){
         $this->validate($request,[
             'name'=>' required | min:3 | max:255',
             'sub_title'=>'required | min:5 | max:255',
             'formas_uso'=>'required | min:5 | max:255',
             'descripcion'=>'required | min:5 | max:255',
             'urlimg'=>'required'
         ]);
         $publication->update([
            'name'=>$request->name,
            'sub_title'=>$request->sub_title,
            'formas_uso'=>$request->formas_uso,
            'distribucion'=>$request->distribucion,
            'descripcion'=>$request->descripcion,
            'usos'=>$request->usos,
            'activos'=>$request->activos,
            'urlimg'=>$request->urlimg
          ]);
        $publications=Publications::all();
        return redirect()->route('admin.publications',['publications'=>$publications]);;
        //  return view('admin.publications',['publications'=>$publications]);
            // return back()->with('mensaje','Publications actualizada correctamente');

     }
}
