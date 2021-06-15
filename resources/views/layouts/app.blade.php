<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fundación Pueblo</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen ">
        @livewire('navigation')
        <h1 class="tituloApp py-5 ">Empoderamiento de las mujeres migrantes del área rural [Ciudad de
            El-Alto]</h1>
        @livewire('menu-navegacion')

        <!-- Page Heading -->
        {{-- @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif --}}

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/wellcome/formulario.js') }}"></script>
    <script src="{{ asset('js/wellcome/index.js') }}"></script>

    <script>
        // EFECTO PARALLAX

        $(document).ready(function() {
            $(window).scroll(function() {
                var barra = $(window).scrollTop();
                var posicion = barra * 0.5;
                $("body").css({
                    "background-position": "0 " + posicion + "px",
                });
            });
        });

    </script>

    @livewireScripts
</body>

</html>
