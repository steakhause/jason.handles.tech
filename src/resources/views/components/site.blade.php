@props([
    'title' => 'Jason Ryszka · Technology Leader | Automation & AI Systems Engineer',
    'description' => 'Jason Ryszka: technology leader and hands-on engineer who connects business systems, protects revenue, and puts AI to work. CTO, integration and automation engineer, Tempe, AZ.',
])
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet">
    @include('partials.analytics')
    @vite(['resources/css/app.css'])
</head>

<body class="bg-stone-50 text-stone-800 font-sans antialiased dark:bg-stone-950 dark:text-stone-200">
    <a href="#main" class="sr-only focus:not-sr-only focus:absolute focus:top-2 focus:left-2 focus:z-50 focus:bg-white focus:text-stone-900 focus:px-3 focus:py-2 focus:rounded">Skip to content</a>

    <header class="sticky top-0 z-40 border-b border-stone-200/80 bg-stone-50/90 backdrop-blur dark:border-stone-800 dark:bg-stone-950/90">
        <nav class="mx-auto flex max-w-5xl items-center justify-between gap-4 px-4 py-3 sm:px-6" aria-label="Main">
            <a href="{{ route('index') }}" class="flex items-center gap-2 font-semibold text-stone-900 dark:text-white">
                <span class="grid h-8 w-8 place-items-center rounded-md bg-red-600 text-sm font-bold text-white">JR</span>
                <span class="hidden sm:inline">Jason Ryszka</span>
            </a>
            <div class="flex items-center gap-1 text-sm">
                <a href="{{ route('index') }}#experience" class="hidden rounded-md px-3 py-2 text-stone-600 hover:text-stone-900 md:inline dark:text-stone-400 dark:hover:text-white">Experience</a>
                <a href="{{ route('index') }}#skills" class="hidden rounded-md px-3 py-2 text-stone-600 hover:text-stone-900 md:inline dark:text-stone-400 dark:hover:text-white">Skills</a>
                <a href="{{ route('projects') }}" class="rounded-md px-3 py-2 text-stone-600 hover:text-stone-900 dark:text-stone-400 dark:hover:text-white">Projects</a>
                <a href="{{ route('index') }}#contact" class="hidden rounded-md px-3 py-2 text-stone-600 hover:text-stone-900 md:inline dark:text-stone-400 dark:hover:text-white">Contact</a>
                <a href="{{ route('resume') }}" class="ml-1 rounded-md bg-stone-900 px-3 py-2 font-medium text-white hover:bg-red-600 dark:bg-white dark:text-stone-900 dark:hover:bg-red-500 dark:hover:text-white">Resume</a>
            </div>
        </nav>
    </header>

    <main id="main">
        {{ $slot }}
    </main>

    <footer class="border-t border-stone-200 py-8 text-sm text-stone-500 dark:border-stone-800">
        <div class="mx-auto flex max-w-5xl flex-col gap-2 px-4 sm:flex-row sm:items-center sm:justify-between sm:px-6">
            <p>© {{ date('Y') }} Jason Ryszka · Handles Tech LLC</p>
            <p class="flex gap-4">
                <a href="mailto:jason@handles.tech" class="hover:text-stone-900 dark:hover:text-white">jason@handles.tech</a>
                <a href="{{ config('services.linkedin.url') }}" target="_blank" rel="noopener" class="hover:text-stone-900 dark:hover:text-white">LinkedIn</a>
            </p>
        </div>
    </footer>
</body>

</html>
