<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\RegisterEvent;


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

    public function editImageWithText(RegisterEvent $register_event)
    {
        // Ruta a la imagen original
        $originalImagePath = public_path('public/img/Logo_itsx_color.png');

        // Crea una copia de la imagen original con un nombre único
        $copyImagePath = public_path('public/img/Logo_itsx_color.png') . Str::random(10) . '_edited.jpg';

        // Abre la imagen original
        $image = Image::make($originalImagePath);

        // Añade texto a la imagen
        $image->text('Luis Fernando Antonio de la Luz', 120, 100, function ($font) {
            $font->file(public_path('public/estilo_letras/OpenSans-Bold.ttf'));
            $font->size(24);
            $font->color('#000000');
            $font->align('center');
            $font->valign('top');
        });

        // Guarda la imagen modificada en la nueva ruta
        $image->save($copyImagePath);

        // Puedes devolver una respuesta, redirección o cualquier otra lógica según tus necesidades

        // Por ejemplo, podrías redirigir al usuario a la nueva imagen
        return redirect('admin.registerEvent' . basename($copyImagePath));
    }

}
