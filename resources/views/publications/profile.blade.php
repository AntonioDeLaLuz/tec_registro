@extends('layout.app')
@section('title')
    {{ $publication->name }} Tec Registra
@endsection
@section('contenido')
    <div class="grid md:grid-cols-3 gap-10 container mx-auto">
        <div class="md:col-span-2">
            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <img class="w-full block" src="{{ asset('uploads/' . $publication->urlimg) }}" alt="{{ $publication->name }}">
                    <div class="flex place-items-center gap-3">
                        {{-- @auth --}}
                        {{-- Agrega componente --}}
                        
                        <livewire:like-publication :publication="$publication"/>

                        {{-- @if ($publication->checklike(auth()->user())) --}}
                        {{-- Si ya dio like --}}
                            {{-- <form action="{{ route('publications.likes.destroy', $publication) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            </form>   --}}
                        {{-- @else --}}
                        {{-- Si no ha dado like --}}
                            {{-- <form action="{{ route('publications.likes.store', $publication) }}" method="POST">
                            @csrf
                            <button type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                            </button>
                            </form>
                        @endif
                        
                        @endauth --}}
                        
                    </div>    
                </div>
                <div>
                    <h2 class="block text-6xl text-terciario text-center mb-3">{{ $publication->name }}</h2>
                    <em class="block text-center text-3xl my-4 ">{{ $publication->sub_title }}</em>
                </div>
            </div>
            <div class="my-10">
                <h3 class="font-semibold text-primario text-4xl mb-4">Descripción</h3>
                <p class="text-justify text-xl">{{ $publication->descripcion }}</p>
            </div>

            {{-- paginacion --}}
            <div>
                <div class="grid md:grid-cols-3 gap-4">
                    @foreach ($paginatePublications as $p)
                    <div class="bg-primario pb-3">
                        <div class="overflow-hidden">
                            <img class="w-full max-h-25  h-25 " src="{{ asset('uploads') . "/" . "$p->urlimg" }}" alt="{{$p->name}}">
                        </div>
                        <div class="mt-6">
                            <h1 class="text-center text-2xl uppercase my-2 text-white font-semibold">{{$p->name}}</h1>
                            <div class="grid place-items-center mt-4">
                                <a href="{{ route('publications.show',['publication'=>$p->name]) }}" class="bg-BotonesVerMas inline-block  mt-4 text-2xl font-semibold text-white py-2 px-3 rounded-sm ">Ver más</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="my-5">
                    {{$paginatePublications->links('')}}
                </div>
                {{-- {{dd($paginatePublications);}} --}}
            </div>
        </div>
        {{-- aside --}}
        <div>
            <div>
<!--                <h2 class="uppercase  text-primario text-5xl">Inscripciones</h2>-->
                {{-- Agregar inscripcion --}}
                @auth
                        <div class="grid items-center">
                            <a href="{{route('register.index',['publication'=>$publication->id])}}"
                               class="uppercase bg-secundario border-none text-white py-6 px-8 mx-auto inline-block shadow-xl rounded-3xl mb-4 hover:cursor-pointer">Incribete</a>
                        </div>
                @endauth
            </div>
            {{-- Agregar comentarios --}}
            @auth
                <div class="shadow bg-white p-5 mb-5">
                    <h2 class="uppercase  text-primario text-3xl text-center mb-4">Comentarios</h2>
                    @if (session('mensaje'))
                        <div class="bg-green-400 p-2 rounded-md mb-5">
                            <p class="text-center uppercase font-semibold">{{ session('mensaje') }}</p>
                        </div>
                    @endif 
                    <form action=" {{ route('comentarios.store', ['publication' => $publication]) }} " method="post">
                        @csrf
                        <div class="mb-5">
                            <label class="font-bold text-primario uppercase mb-4 block" for="comentario">Añade un comentario:</label>
                            <textarea class=" px-4 py-2 block w-full shadow-md rounded-sm  @error('comentario') border-red-500 @enderror"
                                id="comentario" placeholder="Agrega un comentario" name="comentario"></textarea>
                            @error('comentario')
                                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{ $message }}
                                </p>
                            @enderror
                        </div>
                        <input type="hidden" value="0" name="validacion">
                        <div class="grid items-center">
                            <input type="submit" value="Publicar"
                                class="uppercase bg-secundario border-none text-white py-6 px-8 mx-auto inline-block shadow-xl rounded-3xl mb-4 hover:cursor-pointer">
                        </div>
                    </form>
                </div>
            @endauth
            <div class="bg-white shadow-lg mb-5 max-h-96 overflow-y-scroll mt-10">
                <label class="font-bold text-primario uppercase mb-4 block" for="comentario">Comentarios</label>
                @if ($publication->comentarios()->count())
                    @foreach ($publication->comentarios() as $comentario)
                        <div class="p-5 border-gray-300 border-b">
                            {{-- <p>{{$comentario->user_id}}</p> --}}
                            {{-- <p>{{dd($comentario)}}</p> --}}
                            <p class="font-bold" >{{ $comentario->name . ' ' . $comentario->lastnameP . ' ' . $comentario->lastnameM }}
                            </p>
                            <p>{{ $comentario->comentario }}</p>
                            <p class="text-gray-500 ">{{ $comentario->created_at->diffForHumans() }}</p>
                        </div>
                    @endforeach
                @else
                    <p class="p-10 text-center">No hay comentarios aún</p>
                @endif
            </div>
        </div>
        {{-- fin de comentarios --}}
    </div>
@endsection
