<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Publications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index(){
        $publications=DB::table('publications')->skip(2)->take(4)->get();
        return view('index',['publications'=>$publications]);
    }
    public function appEventos(){
        $eventos=Evento::all();
        return view('page.eventos',['eventos'=>$eventos]);
    }
}
