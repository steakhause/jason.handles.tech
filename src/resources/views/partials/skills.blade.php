<ul class="flex-1 text-2xl bg-stone-800 text-white rounded-xl shadow-md p-6 md:min-h-[360px] flex flex-col justify-start">
    <strong class="text-red-400 text-outline-black">{{ $title }}</strong>
    @foreach ($items as $label => $content)
        <li class="text-sm">
            <strong class="text-lg">{{ $label }}:</strong> {!! $content !!}
        </li>
    @endforeach
</ul>
