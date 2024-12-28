<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Load Cairo font for Arabic -->
        @if (app()->getLocale() == 'ar')
            <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>

        @endif

        <link rel="icon" type="image/png" sizes="16x16" href="/images/mediaSharks1.png">


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script>
            // Tp remove the dark mood

            document.documentElement.classList.remove('dark');

        </script>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="">
            @include('livewire.includes.header')


            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}

                @include('livewire.chat-widget')
            </main>
        </div>

        @include('livewire.includes.footer')


        @livewireScripts
        @stack('scripts')
    </body>
</html>
