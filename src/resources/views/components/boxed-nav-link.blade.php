@props([
  'href', 'active' => false,
  'target' => '_self'
  ])

<li>
    <a href="{{ $href }}" target="{{ $target }}"
        class="block w-full py-6 text-center whitespace-nowrap
          {{ $active ? 'bg-red-600 text-white' : 'text-stone-300' }}
          hover:bg-red-600 hover:text-white transition-colors">
        {{ $slot }}
    </a>

</li>
