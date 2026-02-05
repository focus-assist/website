<x-layouts.html>
    
    {{-- HTML <HEAD> --}}
    <x-slot:pageTitle>{{ $pageTitle ?? "" }}</x-slot:pageTitle>
    <x-slot:pageDescription>{{ $pageDescription ?? "" }}</x-slot:pageDescription>
    <x-slot:metaData>{{ $metaData ?? "" }}</x-slot:metaData>
    <x-slot:pageScripts>
        {{-- <script type="text/javascript" src="{{ asset( '/scripts/common.js' ); }}"></script> --}}
        {{ $pageScripts ?? "" }}
    </x-slot:pageScripts>
    <x-slot:pageStyles>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,500;12..96,600;12..96,700;12..96,800&family=Outfit:wght@300;400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset( '/assets/styles/common.css' ); }}">
        {{ $pageStyles ?? "" }}
        <style data-for="theme-styles"> :root { --header-height: 1em; } </style>
    </x-slot:pageStyles>
    

    {{-- HTML <BODY> --}}
    <x-layouts.web.page-header />

    <main id="main">
        {{ $slot }}
    </main>
    
    <x-layouts.web.page-footer />
    
</x-layouts.html>