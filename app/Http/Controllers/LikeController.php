<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Publications;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    //
    public function store(Request $request, Publications $publication){
        // Like::create([
        //     'user_id'=>$request->user()->id,
        //     'publications_id'=>$publication->id
        // ]);

        // Guardar los datos en la misma relación
        $publication->likes()->create([
            'user_id'=>$request->user()->id
        ]);
        return back();
    }

    public function destroy(Request $request, Publications $publication){
        $request->user()->likes()->where('publications_id',$publication->id)->delete();
        return back();
    }
}
