@extends('layout.app')
@section('title')
Panel de administración
@endsection

@section('contenido')
<h1 class="bg-titulo px-12 py-6 mt-5 text-TituloSecciones font-bold uppercase text-5xl text-center">Administración </h1>
<div class=" bg-FondoPanelAdministracion">
    <div class="container mx-auto grid md:grid-cols-2 gap-3 items-center">
        <h1 class="text-4xl uppercase text-white mb-5 ">Seleccione la opción deseada:</h3>
            <div class="mx-3">
                <a href="{{ route('admin.publications') }}" class="block my-5">
                    <div class="bg-PanelAdministracionBTN  px-4 py-6">
                        <p class="text-3xl text-center text-white uppercase m-0">Publicaciones</p>
                    </div>
                </a>
                <a href="{{ route('admin.users') }}" class="block mb-5 ">
                    <div class="bg-PanelAdministracionBTN px-4 py-6">
                        <p class="text-3xl text-center text-white uppercase m-0">Usuarios</p>
                    </div>
                </a>
                <a href="{{ route('admin.users') }}" class="block mb-5 ">
                    <div class="bg-PanelAdministracionBTN px-4 py-6">
                        <p class="text-3xl text-center text-white uppercase m-0">Inscripciones</p>
                    </div>
                </a>
                <a href="{{ route('admin.posts') }}" class="block mb-5 ">
                    <div class="bg-PanelAdministracionBTN px-4 py-6">
                        <p class="text-3xl text-center text-white uppercase m-0">Colaboradores</p>
                    </div>
                </a>
                <a href="{{ route('admin.comentarios') }}" class="block mb-5 ">
                    <div class="bg-PanelAdministracionBTN px-4 py-6">
                        <p class="text-3xl text-center text-white uppercase m-0">Comentarios</p>
                    </div>
                </a>
            </div>
    </div>
</div>

@endsection