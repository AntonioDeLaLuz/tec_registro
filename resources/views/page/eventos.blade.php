@extends('layout.app')
@section('title')
    Eventos
@endsection
@section('contenido')
    <h3 class="text-cPrimario text-5xl uppercase ml-10">Eventos</h3>
    <div class="bg-cPrimario px-5 py-6 w-10/12 mt-8">
        <p class="text-white capitalize border-b-2 border-cSecundario text-3xl">Evento proximo</p>
        <div class="mt-5 grid grid-cols-4">
            <div class="flex justify-center gap-5">
                <div class="bg-cSecundario flex items-center justify-center">
                    <p class="text-white text-2xl">dic</p>
                    <p class="text-white font-bold text-4xl" >11</p>
                </div>
            </div>
            <div class="col-span-3 gap-5">
                <p class="text-white font-bold text-3xl" >Primer encuentro cuerpos academicos</p>
                <p class="text-white text-2xl mt-3">Primer encuentro cuerpos academicos</p>
                
                <div></div>
            </div>
        </div>
    </div>
@endsection
