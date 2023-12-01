@extends('layout.app')
@section('title')
    Panel de administración
@endsection

@section('contenido')
    <h1 class="bg-titulo px-12 py-6 mt-5 text-cPrimario font-bold  text-4xl text-center">Panel de
        administración </h1>
        <div class="mx-auto container w-10/12">
            <h1  class="text-3xl  text-cPrimario mb-3 mt-5 text-left">Seleccione la opción deseada:</h3>
        </div>
    <div class="">
        <div class="container mx-auto w-10/12 grid md:grid-cols-2 lg:grid-cols-4 gap-5 py-10">
                <a href="{{ route('admin.eventos') }}" class="block mb-5 rounded-3xl">
                    <div class="bg-PanelAdministracionBTN rounded-3xl px-5 py-8 flex items-center justify-center flex-col">
                        <i class="fa-solid fa-calendar fa-2xl my-5" style="color: #ffffff;"></i>
                        <p class="text-3xl text-center text-white uppercase ">Eventos</p>
                    </div>
                </a>
                <a href="{{ route('admin.users') }}" class="block mb-5 ">
                    <div class="bg-PanelAdministracionBTN rounded-3xl px-5 py-8 flex items-center justify-center flex-col">
                        <i class="fa-solid fa-users fa-2xl my-5" style="color: #ffffff;"></i>
                        <p class="text-3xl text-center text-white uppercase ">Usuarios</p>
                    </div>
                </a>
                <a href="" class="block mb-5 ">
                    <div class="bg-PanelAdministracionBTN rounded-3xl px-5 py-8 flex items-center justify-center flex-col">
                        <i class="fa-solid fa-folder fa-2xl my-5" style="color: #ffffff;"></i>
                        <p class="text-3xl text-center text-white uppercase">Inscripciones</p>
                    </div>
                </a>
                <a href="{{ route('admin.comentarios') }}" class="block mb-5 ">
                    <div class="bg-PanelAdministracionBTN rounded-3xl px-5 py-8 flex items-center justify-center flex-col">
                        <i class="fa-solid fa-comment fa-2xl my-5" style="color: #ffffff;"></i>
                        <p class="text-3xl text-center text-white uppercase ">Comentarios</p>
                    </div>
                </a>
        </div>
    </div>
@endsection
