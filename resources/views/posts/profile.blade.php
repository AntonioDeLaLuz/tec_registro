@extends('layout.app')
@section('title')
    {{$post->title}} -Jardín Viva
@endsection
@section('contenido')
  <p>{{$post->title}}</p>
  <p>{{$post->caption}}</p>
  <img src="{{ asset('uploads/' . $post->urlimg) }}" alt="{{$post->title}}">
  <p>{{$post->descripcion}}</p>
  <p>{{$post->descripcion_dos}}</p>
  <p>{{$post->author}}</p>
   
@endsection