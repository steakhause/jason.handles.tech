<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @env('production')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.tracking_id') }}">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', '{{ config('
            services.google_analytics.tracking_id ') }}');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '24157061627318479');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=24157061627318479&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    @endenv



    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/app.css">
    </script>
    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="stylesheet" href="/css/fonts.css">
    <title>{{ $title ?? 'Welcome' }}</title>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full bg-stone-800 text-white">
    <div class="min-h-full">
        <x-boxed-nav>
            <x-boxed-nav-link href="#about-me">About</x-boxed-nav-link>
            <x-boxed-nav-link href="#experience">Skills</x-boxed-nav-link>
            <x-boxed-nav-link href="#employment">Employment</x-boxed-nav-link>
            <x-boxed-nav-link href="#education">Education</x-boxed-nav-link>
            <x-boxed-nav-link href="/resume" target="_blank">Resume</x-boxed-nav-link>
            <x-boxed-nav-link href="/projects">Projects</x-boxed-nav-link>
            <x-boxed-nav-link href="/dashboard">AI Agents</x-boxed-nav-link>
        </x-boxed-nav>

        {{ $slot }}
    </div>
</body>

</html>