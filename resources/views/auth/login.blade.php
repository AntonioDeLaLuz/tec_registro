@extends('layout.app')
@section('title')
    Iniciar sesión
@endsection
@section('contenido')
<div class=" container mx-auto ">
    <div class="grid md:grid-cols-2 gap-7 place-items-center">
        <div>
            <img src="{{ asset('img/Logo_itsx_color.png') }}" class="h-96" alt="imagen">
        </div>
        <form  method="POST" action="{{ route('register.login') }}" novalidate class=" px-16 py-8 shadow-sm rounded-md  w-full">
            @csrf
            <h1 class="text-center text-terciario  font-bold uppercase text-4xl my-7 text-titulo">Iniciar sesión</h1>
            <div class="mb-5">
                <label id="email" for="email" class="mb-2 block uppercase text-gray-400 font-bold">Correo electrónico:</label>
                <input type="text" id="email" name="email" value="{{old('email')}}" placeholder="Ingrese su correo electrónico"  class="p-3 rounded-lg shadow-md w-full @error('email') border-red-500 @enderror" >
                {{-- Imprime mensaje de validación --}}
                @error('email')
                    <p class="bg-red-500 w-full text-white text-center rounded-md font-bold p-3 mt-2">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-5">
                <label id="password" for="password" class="mb-2 block uppercase text-gray-400 font-bold">Contraseña:</label>
                <input type="password" id="password" name="password" value="{{old('password')}}" placeholder="Ingrese su contraseña"  class="p-3 rounded-lg shadow-md w-full @error('password') border-red-500 @enderror" >
                {{-- Imprime mensaje de validación --}}
                @error('password')
                    <p class="bg-red-500 w-full text-white text-center rounded-md font-bold p-3 mt-2">{{$message}}</p>
                @enderror
            </div>
            @if (session('mensaje'))
                <p class="mb-1 bg-red-500 w-full text-white text-center rounded-md font-bold p-3 mt-2">{{session('mensaje')}}</p>
            @endif
            <div class="mb-5">
                <input type="checkbox" name="remember" id="sesion"> <label for="sesion" class="  text-center  text-gray-400 ">Mantener la sesión abierta</label> 
            </div>
            <p class="my-10 text-center"><a href="{{ route('registerEvent.create') }}">¿No tiene una cuenta ahora? Regístrese Ahora  </a></p>
            <div class="grid place-items-center">
                <input type="submit" value="Iniciar sesión" class="uppercase font-bold bg-secundario border-none text-white py-6 px-8 mx-auto inline-block shadow-sm rounded-xl hover:cursor-pointer">
            </div>
        </form>
    </div>
    
</div>
@endsection

