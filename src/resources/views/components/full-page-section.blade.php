@props([
    'background' => null,
    'class' => '',
    'id' => '',
    'h1'=> null,
    'h2' => null,
    'h3' => null,
    'quote' => null
])

<section
    {{ $attributes->merge([
        'class' => "h-[100dvh] relative items-center justify-center px-4 bg-cover bg-center $class",
        'id' => $id
    ]) }}
    @if ($background) style="background-image: url('{{ $background }}')" @endif
>

@if($h1)
    <h2 class="max-w-screen-lg mx-auto pt-4 mt-8 items-start text-red-500 font-arkitech text-3xl text-center">{{ $h1 }}</h2>
@endif

@if($h2)
    <p class="text-1xl text-white-500 text-center">{{ $h2 }}</p>
@endif

@if($h3)
    <p class="text-xs text-white-500 text-center">{{ $h3 }}</p>
@endif

@if($h1 || $h2 || $h3)
    <hr class="w-full border-red-500 border-t mt-8">
@endif

@if(!empty($quote) && gettype($quote == 'array'))
    <blockquote class="max-w-screen-lg mx-auto mt-8 text-center italic">
        <p class="text-sm md:text-lg">"{{ $quote[0] }}"</p>
        <footer class="text-xs md:text-base">— <cite>{{ $quote[1] }}</cite></footer>
    </blockquote>
@endif
    {{ $slot }}
</section>
