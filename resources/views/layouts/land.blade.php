<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Nurtech website" />
		<meta name="viewport" content="width=device-width" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/svg+xml" href="{{ asset('storage/icon-nurtech.svg') }}" />

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('storage/vendor/boxicons/css/boxicons.min.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <div class="">
            {{ $slot }}

            {{-- <x-landing.footer /> --}}
        </div>

        @stack('modals')

        @livewireScripts

        @stack('scripts')
    </body>
</html>
