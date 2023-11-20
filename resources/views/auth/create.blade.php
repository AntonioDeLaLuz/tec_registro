@extends('layout.app')
@section('title')
    Crear cuenta
@endsection
@section('contenido')
<h3 class="bg-titulo px-12 py-6 mt-5 text-white font-bold uppercase text-4xl mx-auto inline-block">Crear cuenta </h3>

<div class="grid md:grid-cols-2 container px-10 py-3 mx-auto">
    <form action="{{ route('register.create') }}" method="POST" autocomplete="off">
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
            {{-- <div class="mb-5">
                <label class="font-bold text-primario uppercase mb-4 block" for="username">Nombre de usuario:</label>
                <input class=" px-4 py-2 block w-full shadow-md rounded-xl @error('username') border-red-500 @enderror " type="text" id="name" name="name" placeholder="Ingrese su nombre de usuario" value="{{old('name')}}">
                @error('name')
                 <p class="bg-red-500 text-center text-white p-2 font-bold rounded-xl mt-2">{{$message}}</p>
                @enderror
            </div> --}}
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
                
                <input type="hidden" name="type" value="2">
            </div>
        </div>
        <div class="grid items-center">
            <input type="submit" value="Registrar cuenta" class="uppercase font-bold bg-secundario border-none text-white py-6 px-8 mx-auto inline-block shadow-sm rounded-xl cursor-pointer"> 
        </div>
    </form>
    <div>
        <img src="{{ asset('img/Logo_itsx_color.png') }}" alt="Jardin" class="max-h-30">
    </div>
</div>
@endsection