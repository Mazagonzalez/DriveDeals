<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fuentes -->
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resource/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body style="font-family: 'Poppins', sans-serif;" class="scrollbar">
    <x-nav/>

    <main class="w-full bg-slate-800">
        <x-utils.head-app />

        <!--correccion de no lectura en vista padre-->
        <div class="max-w-5xl pb-6 mx-auto">
            @yield('content')
        </div>
    </main>

    @livewireScripts
</body>
</html>
