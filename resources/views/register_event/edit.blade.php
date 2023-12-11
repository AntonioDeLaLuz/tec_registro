@extends('layout.app')
@section('title')
    Editar publicación
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <h1 class="text-center font-bold uppercase text-4xl mb-4 text-primario">Editar registro</h1>
    
        <div class="grid md:grid-cols-2">
            <form action="{{ route('register_event.edit',$registers_event)}}" method="POST" autocomplete="off">
                @csrf
                <div class="p-4">
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="nombreCA">Nombre CA:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('nombreCA') border-red-500 @enderror" type="text" id="nombreCA" name="nombreCA" placeholder="Ingrese el nombre del CA" value="{{$registers_event->nombreCA}}">
                        @error('nombreCA')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="lider">Lider:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('lider') border-red-500 @enderror" type="text" id="lider" name="lider" placeholder="Ingrese el lider" value="{{$registers_event->lider}}">
                        @error('lider')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="instituto">Institución:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('instituto') border-red-500 @enderror" type="text" id="instituto" name="instituto" placeholder="Ingrese su institución" value="{{$registers_event->instituto}}">
                        @error('instituto')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="grado">Grado:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('grado') border-red-500 @enderror" type="text" id="grado" name="grado" placeholder="Ingrese su grado" value="{{$registers_event->grado}}">
                        @error('grado')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="companion">Acompañante a la cena:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('companion') border-red-500 @enderror" type="text" id="companion" name="companion" placeholder="Si tiene un acompañante para la cena por favor ingreselo" value="{{$registers_event->companion}}">
                        @error('companion')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_1">Colaborador:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_1') border-red-500 @enderror" type="text" id="colaborador_1" name="colaborador_1" placeholder="Si tiene un colaborador ingreselo" value="{{$registers_event->colaborador_1}}">
                        @error('colaborador_1')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_2">Colaborador:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_2') border-red-500 @enderror" type="text" id="colaborador_2" name="colaborador_2" placeholder="Si tiene un colaborador ingreselo" value="{{$registers_event->colaborador_2}}">
                        @error('colaborador_2')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_3">Colaborador:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_3') border-red-500 @enderror" type="text" id="colaborador_3" name="colaborador_3" placeholder="Si tiene un colaborador ingreselo" value="{{$registers_event->colaborador_3}}">
                        @error('colaborador_3')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_4">Colaborador:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_4') border-red-500 @enderror" type="text" id="colaborador_4" name="colaborador_4" placeholder="Si tiene un colaborador ingreselo" value="{{$registers_event->colaborador_4}}">
                        @error('colaborador_4')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_5">Colaborador:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_5') border-red-500 @enderror" type="text" id="colaborador_5" name="colaborador_5" placeholder="Si tiene un colaborador ingreselo" value="{{$registers_event->colaborador_5}}">
                        @error('colaborador_5')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_6">Colaborador:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_6') border-red-500 @enderror" type="text" id="colaborador_6" name="colaborador_6" placeholder="Si tiene un colaborador ingreselo" value="{{$registers_event->colaborador_6}}">
                        @error('colaborador_6')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="font-bold text-primario uppercase mb-4 block" for="tematica">Tematica a la que pertenece:</label>
                        <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('tematica') border-red-500 @enderror" type="text" id="tematica" name="tematica" placeholder="Ingrese la tematica a la que pertenece" value="{{$registers_event->tematica}}">
                        @error('tematica')
                        <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <div class="grid items-center">
                    <input type="submit" value="Actualizar Registro" class="uppercase bg-secundario border-none text-white py-6 px-8 mx-auto inline-block shadow-sm rounded-sm hover:cursor-pointer">
                </div>        
            </form>
        </div>
@endsection