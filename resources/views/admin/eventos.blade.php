@extends('layout.app')
@section('title')
    Gestión de eventos
@endsection
@section('contenido')
<div class=" mx-auto w-11/12 sm:w-10/12 mt-5">
    <div class="flex sm:justify-between items-center sm:flex-row flex-col ">
        <h1 class=" my-8 text-primario font-bold text-center sm:text-left  text-4xl mb-5">Administración de eventos </h1>
        <a href="{{ route('eventos.create') }}" class="font-bold bg-secundario border-none text-white py-3 px-5 inline-block shadow-sm rounded-xl cursor-pointer"><i class="fa-solid fa-plus fa-bounce" style="color: #ffffff;"></i></a>
    </div>
        <livewire:mostrar-publications>
</div>
<div class="flex justify-between my-8">
    <a href="{{ route('admin.index') }}" class="bg-BotonesVolver uppercase font-boldborder-none text-white py-6 px-10 mx-auto inline-block shadow-sm rounded-xl cursor-pointer"> Volver</a>
</div>
@endsection