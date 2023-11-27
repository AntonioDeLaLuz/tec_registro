@extends('layout.app')
@section('title')
    {{ $evento->title }}
@endsection
@section('contenido')
    <div class="grid md:grid-cols-3 gap-10 container mx-auto w-10/12 my-5">
        <div class="md:col-span-2">
            <h2 class="block text-4xl font-bold text-center mb-5 text-cPrimario">{{ $evento->title }}</h2>
            <div class="grid md:grid-cols-2 gap-5">
                {{-- Imgaen --}}
                <div>
                    <img class="w-full block" src="{{ asset('uploads/' . $evento->urlimg) }}" alt="{{ $evento->title }}">
                    <div class="">
                        <livewire:like-publication :publication="$evento" />
                    </div>
                </div>
                {{-- Descripcion --}}
                <div class="p-5">
                    <p class="text-center text-2xl my-3 ">{{ $evento->sub_title }}</p>
                    <div class="mt-16">
                        <h3 class="font-semibold text-primario text-2xl mb-4">Descripción</h3>
                        <p class="text-justify text-xl">{{ $evento->descripcion }}</p>
                    </div>
                </div>
            </div>
            {{-- Comentarios --}}
            @auth
                <div class="shadow bg-white p-5 mb-5">
                    @if (session('mensaje'))
                        <div class="bg-green-400 p-2 rounded-md mb-5">
                            <p class="text-center uppercase font-semibold">{{ session('mensaje') }}</p>
                        </div>
                    @endif
                    <form action=" {{ route('comentarios.store', ['evento' => $evento]) }} " method="post">
                        @csrf
                        <label class="font-bold text-primario uppercase mb-4 block" for="comentario">Añade un
                            comentario:</label>
                        <div class="flex justify-between items-center gap-3">
                            <textarea class="basis-3/4 px-4 py-2 shadow-md rounded-sm  @error('comentario') border-red-500 @enderror"
                                id="comentario" placeholder="Agrega un comentario" name="comentario"></textarea>
                            @error('comentario')
                                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{ $message }}
                                </p>
                            @enderror
                            <div class="basis-1/4 ">
                                <div class="grid items-center">
                                    <input type="hidden" value="0" name="validacion">
                                    <input type="submit" value="Publicar"
                                        class="uppercase rounded-md bg-secundario border-none text-white py-5 px-8 mx-auto inline-block shadow-xl  mb-4 hover:cursor-pointer">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            @endauth
            <div class="bg-white shadow-lg mb-5 max-h-96 overflow-y-scroll mt-10">
                <label class="font-bold text-primario uppercase mb-4 block" for="comentario">Comentarios</label>
                @if ($evento->comentarios()->count())
                    @foreach ($evento->comentarios() as $comentario)
                        <div class="p-5 border-gray-300 border-b">
                            {{-- <p>{{$comentario->user_id}}</p> --}}
                            {{-- <p>{{dd($comentario)}}</p> --}}
                            <p class="font-bold">
                                {{ $comentario->name . ' ' . $comentario->lastnameP . ' ' . $comentario->lastnameM }}
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
    {{-- aside --}}
    <div>
        <h4 class="block text-3xl font-bold text-center mb-5 text-cPrimario">Inscribirse ahora</h4>
        <div class="grid place-items-center">
            <a class="capitalize rounded-md bg-secundario border-none text-white py-5 px-8 mx-auto inline-block shadow-xl  mb-4 hover:cursor-pointer my-10">Más información</a>

        </div>
    </div>
</div>
@endsection
