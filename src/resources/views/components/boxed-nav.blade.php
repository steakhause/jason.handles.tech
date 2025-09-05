@props(['class' => ''])

<nav id="boxed-nav" class="fixed bottom-0 left-0 md:left-4 w-full md:w-auto z-50 {{ $class }}">
    {{-- Toggle button --}}
    <button id="boxed-nav-toggle"
        class="w-full md:w-28 h-14 flex items-center justify-center bg-red-600 text-white rounded-t shadow-md shadow-[0_0_3px_#000]">
        {{-- simple down-chevron --}}
        <svg id="boxed-nav-icon" xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6 transition-transform duration-300 transform" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>

    </button>

    {{-- Menu (starts hidden on mobile) --}}
    <ul id="boxed-nav-menu"
        class="flex-col w-full md:w-28 bg-stone-800 text-white shadow-lg divide-y divide-stone-200 transition-all duration-300 ease-in-out"
        style="display: none;">
            <x-boxed-nav-link href="#about-me">About</x-boxed-nav-link>
            <x-boxed-nav-link href="#experience">Skills</x-boxed-nav-link>
            <x-boxed-nav-link href="#employment">Employment</x-boxed-nav-link>
            <x-boxed-nav-link href="#education">Education</x-boxed-nav-link>
            <x-boxed-nav-link href="/resume" target="_blank">Resume</x-boxed-nav-link>
            <x-boxed-nav-link href="/projects">Projects</x-boxed-nav-link>
            <x-boxed-nav-link href="/dashboard">Login</x-boxed-nav-link>
        {{ $slot }}
    </ul>
</nav>
