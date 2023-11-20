@extends('layout.app')
@section('title')
    Gestión publicaciones
@endsection
@section('contenido')
<h1 class=" px-12 py-6 mt-5 text-primario font-bold uppercase text-4xl text-center">Administración de publicaciones </h1>
<div class="container mx-auto w-full">
    <div class="flex justify-between my-8">
        <a href="{{ route('admin.index') }}" class="bg-BotonesVolver uppercase font-boldborder-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer"> Volver</a>
        <a href="{{ route('publications.create') }}" class="uppercase font-bold bg-secundario border-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer">Agregar</a>
    </div>
    <livewire:mostrar-publications>
</div>
@endsection


