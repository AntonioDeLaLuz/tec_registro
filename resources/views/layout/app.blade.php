<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    {{-- Barra de estilos --}}
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('build/assets/app.a74e86a0.css') }}">
    {{-- <link rel="shortcut icon" href="{{ asset('img/favicon/') }}" type="image/x-icon"> --}}
    {{-- archivos js --}}
    <script src="{{ asset('build/assets/app.e23c9920.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/c311e4c45d.js" crossorigin="anonymous"></script>
    {{-- Agrega estilos de live --}}
    @livewireStyles

</head>
<style>
    .fijarbody{
        overflow: hidden;
    }
    .contenedor-menu {
    position: fixed;
    background-color: rgba(0,0,0, .7);
    z-index: 2;
    width: 100%;
    height: 100%;
    top: 5rem;
    display: flex;
    flex-direction: column;
    padding: 1rem 0;
}
    .fijo {
        position: fixed;
        width: 100%;
    }
</style>
<body class="bg-white    flex flex-col justify-between">
    <header class="p-5  bg-primario shadow">
        <!-- navbar-->
        <nav class="flex justify-between items-center lg:justify-center gap-6">
            <a href="{{ route('index') }}"
                class="text-center text-white font-bold text-3xl no-underline flex items-center gap-2"> <svg
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </a>
            <div class="menu lg:hidden"><i class="fa-solid fa-bars" style="color: #f2f2f2;"></i></div>
            <a href="{{ route('pages.eventos') }}"
                class="text-center text-white font-bold text-3xl no-underline hidden lg:flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                Eventos</a>
            @auth
                @if (auth()->user()->type == 2)
                    <a href="{{ route('admin.index') }}"
                        class="text-center text-white font-bold text-3xl no-underline hidden lg:flex items-center gap-2">
                        <i class="fa-solid fa-gear  hover:fa-spin" style="color: #fff;"></i>
                        Administración</a>
                @endif
                <form method="POST" action="{{ route('register.logout') }}" class="hidden lg:flex items-center gap-2">
                    @csrf
                    <i class="fa-solid fa-right-from-bracket" style="color: #ffffff;" class="text-3xl"></i>
                    <button type="submit" class=" flex text-white text-3xl  font-bold cursor-pointer ">
                        Cerrar sesión</button>
                </form>
            @endauth

            @guest
                <a href="{{ route('register.login') }}"
                    class="text-center text-white font-bold text-3xl no-underline hidden lg:flex items-center gap-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    Iniciar sesión</a>
            @endguest
        </nav>
        <!--final de la navbar-->
    </header>
    <main class="">
        {{-- Contenedor del menu de barra --}}
        <section class="hero"></section>

        @yield('contenido')
    </main>
    

    <footer class="bg-primario py-2 mt-10">
        <div class="container mx-auto grid md:grid-cols-5 gap-5">
            <div class="col-span-2">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.906711496011!2d-96.88233098512036!3d19.50264898684455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db324c8ce295c7%3A0x4da58d2adc774de0!2sInstituto%20Tecnol%C3%B3gico%20Superior%20de%20Xalapa!5e0!3m2!1ses-419!2smx!4v1664514164837!5m2!1ses-419!2smx"
                    class="w-full h-80" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="">
                <div class="py-10">
                    <p class="mb-3 text-white text-center md:text-left text-4xl">Ubicación</p>
                    <div class="p-5">
                        <p class="mb-3 text-white text-center md:text-left">Sección 5A Reserva Territorial S/N</p>
                        <p class="mb-3 text-white text-center md:text-left">Santa Bárbara, 91096</p>
                        <p class="mb-3 text-white text-center md:text-left">Xalapa-Enríquez, Ver.</p>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
            </div>
        </div>

        <div class="py-3 px-0">
            <p class="font-bold text-center text-white">TecRegistra - &copy;Todos los derechos reservados
                {{ now()->year }}</p>
        </div>
    </footer>
    @livewireScripts
    @stack('scripts')
</body>
</html>