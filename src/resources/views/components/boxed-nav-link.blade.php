@props(['href', 'active' => false])

<li>
    <a href="{{ $href }}"
        class="block w-full py-6 text-center whitespace-nowrap
          {{ $active ? 'bg-red-600 text-white' : 'text-stone-900 dark:text-stone-100' }}
          hover:bg-red-600 hover:text-white transition-colors">
        {{ $slot }}
    </a>

</li>
