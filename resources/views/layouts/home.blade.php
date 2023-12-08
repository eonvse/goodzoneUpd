<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="keywords" content="антикафе Good Zone Усть-Илимск, Good Zone Усть-Илимск, Гудзон Усть-Илимск, антикафе Усть-Илимск, сценарии праздника, сценарий праздника" />
        <meta name="description" content="Антикафе Good Zone (Усть-Илимск). Отдых с друзьями, семейный досуг, празднование дней рождения, мероприятия для школьников, аренда помещения для проведения других мероприятий.">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-yellow-200">
        <div class="lg:container lg:mx-auto w-full lg:max-w-screen-lg h-screen">
            <!-- Page Heading -->
            @include('layouts.header')

            <!-- Page Content -->
            <main class="flex flex-wrap md:table md:table-row w-full">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>