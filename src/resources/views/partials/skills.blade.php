<ul class="flex-1 text-2xl">
    <strong class="text-red-400 text-outline-black">{{ $title }}</strong>
    @foreach ($items as $label => $content)
        <li class="text-sm">
            <strong class="text-lg">{{ $label }}:</strong> {!! $content !!}
        </li>
    @endforeach
</ul>
