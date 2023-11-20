@extends('layout.app')
@section('title')
    Gestión de usuarios
@endsection
@section('contenido')
<h1 class="px-12 py-6 mt-5 text-primario text-center font-bold uppercase text-4xl ">Administración de usuarios</h1>
    <div class="container mx-auto w-full">
        <div class="flex justify-between my-8">
            <a href="{{ route('admin.index') }}" class="bg-BotonesVolver uppercase font-boldborder-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer"> Volver</a>
            <a href="{{ route('register.create') }}" class="uppercase font-bold bg-secundario border-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer">Agregar</a>
        </div>
        <table class="w-full">
            <thead class="bg-primario ">
                <tr>
                    <th class="uppercase text-white p-2">ID</th>
                    <th class="uppercase text-white p-2">Nombre(s)</th>
                    <th class="uppercase text-white p-2">Correo</th>
                    <th class="uppercase text-white p-2">Acciones</th>
                </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
            <tr>
                <td class="text-center">{{$user->id}}</td>
                <td class="text-center">{{$user->name . " " . $user->lastnameP . " " . $user->lastnameM}}</td>
                <td class="text-center">{{$user->email}}</td>
                <td>
            
                </td>
            </tr>   
            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
    </div>
@endsection