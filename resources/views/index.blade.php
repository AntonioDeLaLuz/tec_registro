@extends('layout.app')
@section('title')
Tec Registro
@endsection

@section('contenido')



<section class="my-15 container mx-auto">
    <div class="grid md:grid-cols-3 gap-5">
        <div class="mx-auto ">
            <img class="h-96" src="{{ asset('img/Logo_itsx_color.png') }}" alt="foto">
        </div>
        <div class="md:col-span-2">
            <h1 class="text-5xl uppercase text-terciario font-semibold">Mensaje</h1>
            <p class="text-justify mt-14 text-2xl">
                esta es una pagina de registro
            </p>
        </div>
    </div>
</section>

<!--<section class="my-15 container mx-auto">-->
<!--    @include('carrusel.carrusel')-->
<!--</section>-->

@endsection