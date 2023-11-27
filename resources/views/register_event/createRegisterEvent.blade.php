{{dd($publication)}}
@extends('layout.app')
@section('title')
    Crear evento
@endsection
@section('contenido')
<h3 class="bg-titulo px-12 py-6 mt-5 text-white font-bold uppercase text-4xl mx-auto inline-block">Crear registro </h3>

<div class="grid md:grid-cols-2 container px-10 py-3 mx-auto">
    <form action="{{ route('register.store') }}" method="POST" autocomplete="off">
        @csrf
        <div class="p-4">
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="nombreCA">Nombre CA:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('nombreCA') border-red-500 @enderror" type="text" id="nombreCA" name="nombreCA" placeholder="Ingrese el nombre del CA" value="{{old('nombreCA')}}">
                @error('nombreCA')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="lider">Lider:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('lider') border-red-500 @enderror" type="text" id="lider" name="lider" placeholder="Ingrese el lider" value="{{old('lider')}}">
                @error('lider')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="instituto">Institución:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('instituto') border-red-500 @enderror" type="text" id="instituto" name="instituto" placeholder="Ingrese su institución" value="{{old('instituto')}}">
                @error('instituto')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="grado">Grado:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('grado') border-red-500 @enderror" type="text" id="grado" name="grado" placeholder="Ingrese su grado" value="{{old('grado')}}">
                @error('grado')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="companion">Acompañante de la cena:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('companion') border-red-500 @enderror" type="text" id="companion" name="companion" placeholder="Si tiene un acompañante para la cena por favor ingreselo" value="{{old('companion')}}">
                @error('companion')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_1">Colaborador:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_1') border-red-500 @enderror" type="text" id="colaborador_1" name="colaborador_1" placeholder="Si tiene un colaborador ingreselo" value="{{old('colaborador_1')}}">
                @error('colaborador_1')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_2">Colaborador:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_2') border-red-500 @enderror" type="text" id="colaborador_2" name="colaborador_2" placeholder="Si tiene un colaborador ingreselo" value="{{old('colaborador_2')}}">
                @error('colaborador_2')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_3">Colaborador:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_3') border-red-500 @enderror" type="text" id="colaborador_3" name="colaborador_3" placeholder="Si tiene un colaborador ingreselo" value="{{old('colaborador_3')}}">
                @error('colaborador_3')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_4">Colaborador:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_4') border-red-500 @enderror" type="text" id="colaborador_4" name="colaborador_4" placeholder="Si tiene un colaborador ingreselo" value="{{old('colaborador_4')}}">
                @error('colaborador_4')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_5">Colaborador:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_5') border-red-500 @enderror" type="text" id="colaborador_5" name="colaborador_5" placeholder="Si tiene un colaborador ingreselo" value="{{old('colaborador_5')}}">
                @error('colaborador_5')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="colaborador_6">Colaborador:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('colaborador_6') border-red-500 @enderror" type="text" id="colaborador_6" name="colaborador_6" placeholder="Si tiene un colaborador ingreselo" value="{{old('colaborador_6')}}">
                @error('colaborador_6')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="solicitud_equipo">Solicitud de equipo:</label>
                <label class="font-bold text-primario uppercase mb-4 block" >-Cañon</label>
                <label class="font-bold text-primario uppercase mb-4 block" >-PC</label>
                <label class="font-bold text-primario uppercase mb-4 block" >-Audio</label>
                <label class="font-bold text-primario uppercase mb-4 block" >-Extensión</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('solicitud_equipo') border-red-500 @enderror" type="text" id="solicitud_equipo" name="solicitud_equipo" placeholder="Si requiere algun equipo ingreselo" value="{{old('solicitud_equipo')}}">
                @error('solicitud_equipo')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="tematica">Tematica a la que pertenece:</label>
                <label class="font-bold text-primario uppercase mb-4 block" >-Tecnología sustentable</label>
                <label class="font-bold text-primario uppercase mb-4 block" >-Sistemas de gestión</label>
                <label class="font-bold text-primario uppercase mb-4 block" >-Gestión ambiental</label>
                <label class="font-bold text-primario uppercase mb-4 block" >-Salud y sustentabilidad</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('tematica') border-red-500 @enderror" type="text" id="tematica" name="tematica" placeholder="Ingrese la tematica a la que pertenece" value="{{old('tematica')}}">
                @error('tematica')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>


            <div class="mb-5">
                
                <input type="hidden" name="type" value="3">
            </div>
        </div>
        <div class="grid items-center">
            <input type="submit" value="Registrar inscripción" class="uppercase font-bold bg-secundario border-none text-white py-6 px-8 mx-auto inline-block shadow-sm rounded-xl cursor-pointer">
        </div>
    </form>
    <div>
        <img src="{{ asset('img/Logo_itsx_color.png') }}" alt="Logo" class="max-h-30">
    </div>
    <div>
        <img src="{{ asset('img/Logo_itsx_color.png') }}" alt="Logo" class="max-h-30">
    </div>
</div>
@endsection