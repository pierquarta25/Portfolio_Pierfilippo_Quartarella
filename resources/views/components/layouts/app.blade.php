<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Portfolio — Pierfilippo Quartarella</title>

    {{-- Anti-FOUC: applica il tema scuro PRIMA che la pagina venga disegnata --}}
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark-mode');
        }
    </script>

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=Space+Grotesk:wght@400;600;700&display=swap"
        rel="stylesheet"
    >

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('media/favicon.svg') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    {{-- Font Awesome --}}
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    >

    {{-- Vite: compila Bootstrap + il tuo style.css --}}
    @vite(['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js'])

    {{-- Livewire styles --}}
    @livewireStyles

    @stack('styles')
</head>

<body>

    {{-- Preloader --}}
    <div id="preloader">
        <div class="spinner-border text-primary" style="width:3rem; height:3rem;" role="status">
            <span class="visually-hidden">Caricamento...</span>
        </div>
    </div>

    {{-- Navbar Livewire --}}
    @livewire('navbar')

    {{-- Contenuto della pagina --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Pulsante Torna Su --}}
    <button id="back-to-top" class="btn btn-primary btn-sm rounded-circle shadow" aria-label="Torna in cima">
        <i class="fa-solid fa-arrow-up"></i>
    </button>

    {{-- Banner Cookie --}}
    @include('partials.cookie-banner')

    {{-- Librerie esterne --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>

    {{-- Vite: il tuo main.js --}}
    @vite('resources/js/main.js')

    {{-- Livewire scripts --}}
    @livewireScripts

    @stack('scripts')

</body>
</html>
