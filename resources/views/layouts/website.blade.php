<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased relative min-h-screen">
       
        <!-- Background image (fixed) -->
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" 
             alt="Background" 
             class="fixed inset-0 -z-10 h-full w-full object-cover opacity-25">

        <!-- Overlay (fixed) -->
        <div class="fixed inset-0 -z-10 bg-gradient-to-t from-black via-gray-900/70 to-gray-900"></div>

        <!-- Content -->
        <div class="min-h-screen relative">
            @include('layouts.website.nav')
            @include('layouts.website.header')

            <!-- Page Content -->
            <main class="p-6 text-white">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
