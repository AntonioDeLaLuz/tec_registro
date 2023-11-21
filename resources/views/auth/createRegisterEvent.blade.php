@extends('layout.app')
@section('title')
    Crear cuenta
@endsection
@section('contenido')
<h3 class="bg-titulo px-12 py-6 mt-5 text-white font-bold uppercase text-4xl mx-auto inline-block">Crear cuenta </h3>

<div class="grid md:grid-cols-2 container px-10 py-3 mx-auto">
    <form action="{{ route('registerEvent.create') }}" method="POST" autocomplete="off">
        @csrf
        <div class="p-4">
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="name">Nombre:</label>
                <input class=" px-4 py-2 block w-full shadow-md rounded-xl @error('name') border-red-500 @enderror " type="text" id="name" name="name" placeholder="Ingrese su nombre" value="{{old('name')}}">
                @error('name')
                 <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="lastnameP">Apellido Paterno:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('lastnameP') border-red-500 @enderror" type="text" id="lastnameP" name="lastnameP" placeholder="Ingrese su apellido paterno" value="{{old('lastnameP')}}">
                @error('lastnameP')
                    <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="lastnameM">Apellido Materno:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('lastnameM') border-red-500 @enderror" type="text" id="lastnameM" name="lastnameM" placeholder="Ingrese su apellido materno" value="{{old('lastnameM')}}">
                @error('lastnameM')
                    <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="email">Correo electrónico:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('email') border-red-500 @enderror" type="text" id="email" name="email" placeholder="Ingrese su correo electrónico" value="{{old('email')}}">
                @error('email')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="password">Contraseña:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('password') border-red-500 @enderror" type="password" id="password" name="password" placeholder="Ingrese su contraseña" value="{{old('password')}}">
                @error('password')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="password_confirmation">Repetir contraseña:</label>
                <input class="px-4 py-2 block w-full shadow-md rounded-xl @error('password_confirmation') border-red-500 @enderror" type="password" id="password_confirmation" name="password_confirmation" placeholder="Repita su contraseña" value="{{old('password_confirmation')}}">
                @error('password')
                <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div>
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
                
                <input type="hidden" name="type" value="2">
            </div>
        </div>
        <div class="grid items-center">
            <input type="submit" value="Registrar cuenta" class="uppercase font-bold bg-secundario border-none text-white py-6 px-8 mx-auto inline-block shadow-sm rounded-xl cursor-pointer">
        </div>
    </form>
    <div>
        <img src="{{ asset('img/Logo_itsx_color.png') }}" alt="Logo" class="max-h-30">
    </div>
</div>
@endsection