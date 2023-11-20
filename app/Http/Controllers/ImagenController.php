<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ImagenController extends Controller
{
    //
    public function store(Request $request){
        // $input=$request->all();
        // return response()->json($input);

        // Ver el archivo
        $image=$request->file('file');

        // Asiganar un nombre y concatener
        $nameImage=Str::uuid() . "." . $image->extension();

        $imageServidor=Image::make($image);

        // $imageServidor->resize(500,500);
        $imageServidor->fit(500,500);

        // Apunta a la ruta de public
        $imagePath=public_path('uploads') . "/" . $nameImage;

        // Almacena la imagen
        $imageServidor->save($imagePath);

        // Retornar el nombre de la imagen
        return response()->json(['nameImage'=>$nameImage]);
    }
}
