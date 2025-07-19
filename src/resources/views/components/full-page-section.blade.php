@props([
    'background' => null,
    'class' => '',
])

<section
    {{ $attributes->merge([
        'class' => "min-h-screen items-center justify-center px-4 bg-cover bg-center $class",
    ]) }}
    @if ($background) style="background-image: url('{{ $background }}')" @endif
>
    {{ $slot }}
</section>
