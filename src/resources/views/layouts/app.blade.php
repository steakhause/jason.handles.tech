<x-layout>
    <div class="min-h-screen bg-stone-900 text-stone-300">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
        <header class="bg-stone-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</x-layout>