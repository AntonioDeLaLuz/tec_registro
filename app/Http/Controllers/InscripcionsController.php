<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscripcionsController extends Controller
{
    //
    public function index (){
        return view('incripciones.create');
    }
}
