@extends('layout.app')
@section('title')
    Eventos
@endsection
@section('contenido')
    <h3 class="text-cPrimario text-5xl uppercase ml-10 text-center my-5">Eventos</h3>
    @forelse ( $eventos as $evento)
    <div class="bg-cPrimario px-5 py-6 w-10/12 mt-8 container mx-auto">
        <div class="flex justify-between relative">
            <p class="text-white capitalize border-b-2 border-cSecundario text-3xl">Evento proximo</p>
            <div class="bg-cSecundario flex items-center justify-center flex-col p-5 absolute right-0 top-[-24px]">
                        <p class="text-white text-2xl">DIC</p>
                        <p class="text-white font-bold text-4xl" >12</p>
                    </div>
        </div>
        <div class="mt-5 grid grid-cols-4">
            <div class="flex justify-center gap-5">
                <img src="{{ asset('uploads/'.$evento->urlimg ) }}" class="object-cover h-44 w-44" alt="{{$evento->title }}">
                    
            </div>
            <div class="col-span-3 gap-5">
                <p class="text-white font-bold text-3xl" >{{$evento->title}}</p>
                <p class="text-white text-2xl mt-3">{{$evento->sub_title}}</p>
                <div class="mt-5 flex flex-row-reverse">
                    <a href="{{ route('evento.show', $evento->id) }}" class="mx-5 text-2xl bg-cSecundario px-10 py-3 font-bold rounded-xl">Ver más </a>
                </div>
            </div>
        </div>
    </div>
    @empty
        <p>No hay enventos</p>
    @endforelse

@endsection
