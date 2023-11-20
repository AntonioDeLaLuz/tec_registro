<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        {{-- Barra de estilos --}}
        @stack('styles')
        <link rel="stylesheet" href="{{ asset('build/assets/app.3ab533d1.css') }}">
        <link rel="shortcut icon" href="{{ asset('img/favicon/Logocolorabeja_peque.ico') }}" type="image/x-icon">
        {{-- archivos js --}}
        <script src="{{ asset('build/assets/app.46046821.js') }}" defer></script>
        {{-- Agrega estilos de live --}}
        @livewireStyles

    </head>
    <body class="bg-white    flex flex-col justify-between">
        <header class="p-5  bg-primario shadow">

            <!-- navbar-->
            <nav class="flex justify-center gap-6">
                    <a href="{{ route('index')}}" class="text-center text-white font-bold text-3xl no-underline flex items-center gap-2"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>Inicio</a>

                <a href="{{ route('publications.catalogue')}}" class="text-center text-white font-bold text-3xl no-underline flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                      </svg>
                      Publicaciones</a>
<!--                <a href="{{ route('posts.catalogue') }}" class="text-center text-white font-bold text-3xl no-underline flex items-center gap-2">-->
<!--                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">-->
<!--                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />-->
<!--                      </svg>-->
<!--                      Colaboradores</a>-->

                      @auth
<!--                      <a class="text-center text-white font-bold text-3xl no-underline flex items-center gap-2">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">-->
<!--                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />-->
<!--                        </svg>-->
<!--                        {{auth()->user()->name . " " . auth()->user()->lastnameP }}</a>-->
                        @if (auth()->user()->type==2)
                        <a href="{{ route('admin.index')}}" class="text-center text-white font-bold text-3xl no-underline flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                              </svg>
                              Administración</a>
                        @endif
                      <form method="POST" action="{{ route('register.logout') }}" class="mt-1">
                        @csrf
                        <button type="submit" class=" flex text-white text-3xl md:mr-3 font-bold cursor-pointer mt-1 ">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                              </svg>
                              Cerrar sesión</button>
                        </form>
                      @endauth

                      @guest
                      <a href="{{ route('register.login') }}" class="text-center text-white font-bold text-3xl no-underline flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                        </svg>
                        Iniciar sesión</a>
                      @endguest
            </nav>
            <!--final de la navbar-->

        </header>
        <main class=" mt-10  min-h-screen flex-1">
            {{-- container mx-auto --}}
            <h2 class="text-TituloSecciones text-center text-5xl mb-10 font-semibold">@yield('titulo')</h2>
            @yield('contenido')
        </main>
        <footer class="bg-primario py-2 mt-10">
            <div class="container mx-auto grid md:grid-cols-5 gap-5">
                <div class="col-span-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3760.906711496011!2d-96.88233098512036!3d19.50264898684455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db324c8ce295c7%3A0x4da58d2adc774de0!2sInstituto%20Tecnol%C3%B3gico%20Superior%20de%20Xalapa!5e0!3m2!1ses-419!2smx!4v1664514164837!5m2!1ses-419!2smx"  class="w-full h-80"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="">
                    <div class="py-10">
                        <div class="p-5">
                            <p class="mb-3 text-white text-center md:text-left">Sección 5A Reserva Territorial S/N</p>
                            <p class="mb-3 text-white text-center md:text-left">Santa Bárbara, 91096</p>
                            <p class="mb-3 text-white text-center md:text-left">Xalapa-Enríquez, Ver.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <h3 class=" text-white mb-3 text-2xl font-bold text-center  my-2">Redes sociales</h3>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-BlancoBTN  px-3 py-2 rounded-xl ">
                            <img src="{{ asset('img/logoFacebook-removebg-preview (1).png') }}" class="w-8 h-8 mx-auto" alt="">
                        </div>
                        <div class="bg-BlancoBTN  px-5 py-3 rounded-xl">
                            <img src="{{ asset('img/insta.png') }}" class="w-8 h-8 mx-auto" alt="">
                        </div>
                        <div class="bg-BlancoBTN  px-5 py-3 rounded-xl">
                            <img src="{{ asset('img/whats.png') }}" class="w-8 h-8 mx-auto" alt="">
                        </div>
                    </div>
<!--                    <img class="h- 25 mx-auto" src="{{ asset('img/LogocolorabejaBLANCO_pque.png') }}" alt="">-->
                </div>
            </div>

            <div class="py-3 px-0">
                <p class="font-bold text-center text-white">TecRegistra - &copy;Todos los derechos reservados {{now()->year}}</p>
            </div>
        </footer>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
