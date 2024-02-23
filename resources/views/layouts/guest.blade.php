<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <!-- Fuentes -->
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resource/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>
<body style="font-family: 'Poppins', sans-serif;" class="scrollbar">
    <main class="w-screen h-screen">
        <x-utils.form.lang />

        {{ $slot }}

        <x-utils.form.right />
    </main>

    @livewireScripts
</body>
</html>
