@extends('layout.app')
@section('title')
    Colaboradores
@endsection
@section('titulo')
    Colaboradores
@endsection
@section('contenido')
    <div>
        <div>
            <livewire:buscar-publications>
        </div>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach ($posts as $post )
        <div class="rounded-xl">
            <div class="overflow">
                <img src="{{ asset('uploads/' . $post->urlimg) }}" alt="{{$post->title}}">
            </div>
            <div class="p-4 bg-primario">
                <p class="text-center font-bold uppercase text-3xl my-8">{{$post->title}}</p>
                <p class="text-center font-semibold text-2xl ">{{$post->caption}}</p>
                <a  class="text-center uppercase  bg-BotonesVerMas px-3 py-2" href="{{ route('posts.show', $post->title) }}">Ver más</a>
            </div>

        </div>
        @endforeach
    </div>
@endsection