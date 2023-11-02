<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Nurtech website" />
		<meta name="viewport" content="width=device-width" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/svg+xml" href="{{ asset('storage/icon-nurtech.svg') }}" />

        <title>@yield('title')</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

        <link rel="stylesheet" href="{{ asset('storage/vendor/boxicons/css/boxicons.min.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <div class="">
            {{ $slot }}
        </div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
