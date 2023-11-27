
@extends('layout.app')
@section('title')
Inscripciones
@endsection
@section('contenido')
<h1 class="px-12 py-6 mt-5 text-primario text-center font-bold uppercase text-4xl ">Inscripciones</h1>
<div class="container mx-auto w-full">
    <div class="flex justify-between my-8">
        <a href="{{ route('admin.index') }}" class="bg-BotonesVolver uppercase font-boldborder-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer"> Volver</a>
    </div>
    @if($registers_event->count()<=0)
    <p class="text-center font-semibold my-4 uppercase">No hay inscripciones</p>
    @else
    <table class="w-full">
        <thead class="bg-primario ">
        <tr>
            <th class="uppercase text-white p-2">Número</th>
            <th class="uppercase text-white p-2">Autor</th>
            <th class="uppercase text-white p-2">Evento</th>
            <th class="uppercase text-white p-2">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @php
        $contador = 1;
        @endphp
        @foreach ($registers_event as $register_event )
        <tr>
            <td class="text-center">{{$contador++ }}</td>
            <td class="text-center">{{$register_event->name . " " . $register_event->lastnameP . " " . $register_event->lastnameM}}</td>
            <td class="text-center">{{$register_event->publication_name}}</td>
            <td>
                <div class="grid grid-cols-2 place-items-center">
                    {{-- Validar --}}
                    <form action="{{ route('register.validate',$register_event->id)}}" method="POST" >
                        @csrf
                        <div class="flex place-items-center bg-green-500 p-2 rounded-xl hover:bg-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>

                            <input type="submit" value="Validar" class="bg-green-500 hover:bg-green-600 cursor-pointer text-center p-2 text-white font-bold ">

                        </div>
                    </form>
                    {{-- Eliminar --}}
                    <form action="{{ route('register.destroy', $register_event->id) }}" method="POST" >
                        @csrf
                        <div class="flex place-items-center bg-red-500 p-2 rounded-xl hover:bg-red-700 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  text-white">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                            </svg>
                            <input type="submit" value="Eliminar" class="bg-red-500 hover:bg-red-700 cursor-pointer text-center p-2 text-white font-bold ">
                        </div>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
@endsection