@extends('layout.app')
@section('title')
Jardín Viva
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

{{-- <section class="my-15">
    <h1 class="text-5xl uppercase text-terciario font-semibold my-10">Te puede interesar</h1>
    <div class="grid md:grid-cols-3  gap-5">
        <div>Texto</div>
        <div>Texto</div>
        <div>Texto</div>
    </div>
</section> --}}

<!--<section class="my-10 container mx-auto">-->
<!--    <h1 class="text-5xl uppercase text-terciario font-semibold my-10">Nuestras Publicaciones</h1>-->
<!--    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">-->
<!--        @foreach ($publications as $publication )-->
<!--        <div class="bg-terciario pb-3">-->
<!--            <div class="overflow-hidden">-->
<!--                <img class="w-full max-h-25  h-25 " src="{{ asset('uploads') . "/" . "$publication->urlimg" }}" alt="{{$publication->name}}">-->
<!--            </div>-->
<!--            <div class="mt-6">-->
<!--                <h1 class="text-center text-2xl uppercase my-2 text-white font-semibold">{{$publication->name}}</h1>-->
<!--                <div class="grid place-items-center mt-4">-->
<!--                    <a href="{{ route('publications.show',['publication'=>$publication->name]) }}" class="bg-secundario inline-block  mt-4 text-2xl font-semibold text-white py-2 px-3 rounded-3xl ">Ver más</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        @endforeach-->
<!--    </div>-->
<!--</section>-->
@endsection