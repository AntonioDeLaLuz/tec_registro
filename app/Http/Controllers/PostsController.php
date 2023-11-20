<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        $posts=Posts::all();
        return view('posts.catalogue',['posts'=>$posts]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'title'=>' required | min:3 | max:255',
            'caption'=>'required | min:5 | max:255',
            'author'=>'required | min:5 | max:255',
            'descripcion'=>'required | min:5',
            'descripcion_dos'=>'required | min:5',
            'urlimg'=>'required',
        ]);
        Posts::create([
            'title'=>$request->title,
            'caption'=>$request->caption,
            'author'=>$request->author,
            'distribucion'=>$request->distribucion,
            'descripcion'=>$request->descripcion,
            'descripcion_dos'=>$request->descripcion_dos,
            'urlimg'=>$request->urlimg
         ]);
         return redirect()->route('posts.catalogue');
    }
    public function show(Posts $post){
        return view('posts.profile',['post'=>$post]);
    }
    public function destroy(Posts $post){
        $post->delete();
        $posts=Posts::all();
        return redirect()->route('admin.posts',['posts'=>$posts]);
    }

    public function edit(Posts $post){
        return view('posts.edit',['post'=>$post]);
    }
    public function update(Posts $post, Request $request){
        $this->validate($request,[
            'title'=>' required | min:3 | max:255',
            'caption'=>'required | min:5 | max:255',
            'author'=>'required | min:5 | max:255',
            'descripcion'=>'required | min:5',
            'descripcion_dos'=>'required | min:5',
            'urlimg'=>'required',
        ]);
        $post->update([
            'title'=>$request->title,
            'caption'=>$request->caption,
            'author'=>$request->author,
            'distribucion'=>$request->distribucion,
            'descripcion'=>$request->descripcion,
            'descripcion_dos'=>$request->descripcion_dos,
            'urlimg'=>$request->urlimg
         ]);
         $posts=Posts::all();
         return view('admin.posts',['posts'=>$posts]);
    }
}
