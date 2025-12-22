@props(['game'])

<a
    href="{{ route('review.create', [
        'game_id' => $game['id'],
        'title'   => $game['name'],
        'image'   => $game['image'] ?? null,
        'year'    => $game['year'] ?? null,
    ]) }}"
    class="group block w-full max-w-[1000px] mx-auto"
>
    <div
        class="bg-newgray rounded-2xl px-6 py-5
               flex gap-6 items-center
               transition-all duration-300 ease-out
               hover:-translate-y-1
               hover:shadow-xl hover:shadow-black/40
               hover:ring-1 hover:ring-coolyellow/60"
    >

        <img
            src="{{ $game['image'] ?? 'https://placehold.co/90x90' }}"
            alt="{{ $game['name'] }}"
            class="w-[90px] h-[90px] rounded-xl object-cover flex-shrink-0"
        >

        <div class="flex flex-col flex-1">
            <h2 class="text-lg font-semibold text-white group-hover:text-coolyellow transition">
                {{ $game['name'] }}
            </h2>

            @if(!empty($game['genre']))
                <p class="text-sm text-gray-400 mt-1">
                    {{ $game['genre'] }}
                </p>
            @endif

            <div class="flex items-center gap-4 mt-2 text-sm text-gray-400">
                @if(!empty($game['year']))
                    <span>{{ $game['year'] }}</span>
                @endif
            </div>
        </div>

        <div class="text-coolyellow font-semibold text-sm whitespace-nowrap">
            Write review →
        </div>
    </div>
</a>
