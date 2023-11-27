@extends('layout.app')
@section('title')
    Registrar publicación
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <h1 class="text-center font-bold uppercase text-4xl mb-4 text-primario">Registrar una publicación</h1>
    
        <div class="grid md:grid-cols-2 container mx-auto">
            <form action="{{ route('eventos.create') }}" method="POST" autocomplete="off">
                @csrf
                <div class="p-4">
                    <div class="grid md:grid-cols-2 mt-6 gap-4">
                        <div class="mb-5">
                            <label class="font-bold text-primario uppercase mb-4 block" for="title">Titulo:</label>
                            <input class="border-primario-100 px-4 py-2 block w-full shadow-md rounded-sm @error('title') border-red-500 @enderror " type="text" id="title" name="title" placeholder="Ingrese el titulo de la publicación" value="{{old('title')}}">
                            @error('title')
                            <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label class="font-bold text-primario uppercase mb-4 block" for="sub_title">Subtitulo:</label>
                            <input class="border-primario-100 px-4 py-2 block w-full shadow-md rounded-sm @error('sub_title') border-red-500 @enderror" type="text" id="sub_title" name="sub_title" placeholder="Ingrese el sub-titulo de la publicación" value="{{old('sub_title')}}">
                            @error('sub_title')
                            <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="author">Por definir si va un autor:</label>
                        <textarea class=" px-4 py-2 block w-full shadow-md rounded-sm  @error('author') border-red-500 @enderror " id="author" name="author">{{old('author')}}</textarea>
                        @error('author')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="descripcion">Descripción:</label>
                        <textarea class=" px-4 py-2 block w-full shadow-md rounded-sm  @error('descripcion') border-red-500 @enderror" id="descripcion" name="descripcion">{{old('descripcion')}}</textarea>
                        @error('descripcion')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <input type="hidden" name="urlimg" value="">
                        @error('urlimg')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                </div>
                </div>
                <div class="grid items-center">
                    <input type="submit" value="Registrar" class="uppercase bg-secundario border-none text-white py-6 px-8 mx-auto inline-block shadow-sm rounded-sm hover:cursor-pointer"> 
                </div>        
            </form>
            <div>
                <form action="{{ route('image.store') }}" method="POST" id="dropzone" enctype="multipart/form-data" class="border-dashed border-2 h-96 rounded flex flex-col justify-center items-center">
                    {{-- Valida --}}
                    @csrf
                </form>
            </div>
        </div>
@endsection