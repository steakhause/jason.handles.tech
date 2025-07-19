<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/app.css"></script>
    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="stylesheet" href="/css/fonts.css">
    <title>{{ $title ?? 'Welcome' }}</title>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>

<body class="h-full bg-stone-800 text-white">
    <div class="min-h-full">
        {{-- example home.blade.php --}}
        <x-boxed-nav>
            <x-boxed-nav-link href="#about-me">About</x-boxed-nav-link>
            <x-boxed-nav-link href="#experience">Skills</x-boxed-nav-link>
            <x-boxed-nav-link href="#employment">Employment</x-boxed-nav-link>
            <x-boxed-nav-link href="#education">Education</x-boxed-nav-link>
            <x-boxed-nav-link href="{{ route('about') }}">Resume</x-boxed-nav-link>
        </x-boxed-nav>

        {{ $slot }}
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="js/boxed-nav.js"></script>
</body>

</html>
