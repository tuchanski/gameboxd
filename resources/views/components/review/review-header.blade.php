@props([
    'image',
    'title',
    'year'
])

<div class="flex items-center gap-6 mb-8">
    <img
        src="{{ $image }}"
        alt="{{ $title }}"
        class="w-24 h-24 rounded-xl object-cover"
    >

    <div>
        <h1 class="text-2xl font-bold text-white">
            Review for
            <span class="text-coolyellow">{{ $title }}</span>
        </h1>

        <p class="text-gray-400 mt-1">
            Released in {{ $year }}
        </p>
    </div>
</div>
