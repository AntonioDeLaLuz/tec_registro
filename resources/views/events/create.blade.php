@extends('layout.app')
@section('title')
    Registrar publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <h1 class="text-center font-bold  text-4xl text-primario mt-5 mb-7 md:mb-10">Registrar evento</h1>
    <div class="grid md:grid-cols-2 container mx-auto w-10/12 mt-5 gap-10">
        <form action="{{ route('eventos.create') }}" method="POST" autocomplete="off">
            @csrf
            <div class="grid lg:grid-cols-2 gap-4">
                <div class="mb-5">
                    <label class="font-bold text-primario uppercase  block mb-4" for="title">Titulo:</label>
                    <input
                        class="border-primario-100 px-4 py-2 block w-full shadow-md rounded-sm @error('title') border-red-500 @enderror "
                        type="text" id="title" name="title" placeholder="Ingrese el titulo del evento"
                        value="{{ old('title') }}">
                    @error('title')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="font-bold text-primario uppercase mb-4 block" for="sub_title">Subtitulo:</label>
                    <input
                        class="border-primario-100 px-4 py-2 block w-full shadow-md rounded-sm @error('sub_title') border-red-500 @enderror"
                        type="text" id="sub_title" name="sub_title" placeholder="Ingrese el sub-titulo de la publicación"
                        value="{{ old('sub_title') }}">
                    @error('sub_title')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase  block mb-4" for="author">Autor:</label>
                    <input
                        class="border-primario-100 px-4 py-2 block w-full shadow-md rounded-sm @error('author') border-red-500 @enderror "
                        type="text" id="author" name="author" placeholder="Ingrese el autor del evento"
                        value="{{ old('author') }}">
                @error('author')
                    <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase  block mb-4" for="date">Fecha del evento:</label>
                    <input
                        class="border-primario-100 px-4 py-2 block w-full shadow-md rounded-sm @error('author') border-red-500 @enderror "
                        type="date" id="date" name="date" value="{{ old('date') }}">
                @error('date')
                    <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="descripcion">Descripción:</label>
                <textarea class=" px-4 py-2 block w-full shadow-md rounded-sm  @error('descripcion') border-red-500 @enderror"
                    id="descripcion" name="descripcion">{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <input type="hidden" name="urlimg" value="">
                @error('urlimg')
                    <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="grid items-center mt-5">
                <input type="submit" value="Registrar" class="bg-secundario border-none rounded-md text-white py-6 px-8 mx-auto inline-block shadow-sm hover:cursor-pointer"> 
            </div>      
        </form>
        <div>
            <label class="font-bold text-primario uppercase mb-4 block" for="author">Seleccione el poster del evento:
            </label>
            <form action="{{ route('image.store') }}" method="POST" id="dropzone" enctype="multipart/form-data"
                class="border-dashed border-2 h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
    </div>

@endsection
