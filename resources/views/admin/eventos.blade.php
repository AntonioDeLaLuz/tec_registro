@extends('layout.app')
@section('title')
    Gestión de eventos
@endsection
@section('contenido')
<div class=" mx-auto w-10/12 mt-5">
    <div class="flex justify-between items-center">
        <h1 class="py-6 mt-5 text-primario font-bold  text-4xl mb-5">Administración de eventos </h1>
        <a href="{{ route('eventos.create') }}" class="uppercase font-bold bg-secundario border-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer">Agregar</a>
    </div>
        <livewire:mostrar-publications>
</div>
<div class="flex justify-between my-8">
    <a href="{{ route('admin.index') }}" class="bg-BotonesVolver uppercase font-boldborder-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer"> Volver</a>
</div>
@endsection