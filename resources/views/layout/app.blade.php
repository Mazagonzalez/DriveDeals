<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fuentes -->
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resource/js/app.js'])
</head>
<body style="font-family: 'Poppins', sans-serif;" class="scrollbar">
    <main class="w-full">
        <x-nav/>

        <p class="text-red-500">{{ __('Hello') }}</p>
    </main>
</body>
</html>
