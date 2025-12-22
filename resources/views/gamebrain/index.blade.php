<x-layout>

    <div class="mt-30 flex flex-col justify-center items-center
                border border-coolyellow rounded-xl p-10">

        <h1 class="text-3xl font-bold text-white mb-2">
            Game <span class="text-coolyellow">Searcher</span>
        </h1>

        <p class="text-gray-400 mb-8 text-center">
            Find a game and write your review ✏️
        </p>

        <form method="GET" action="/games" class="mt-2 mb-10 flex flex-col">
            <x-form.label>Game name</x-form.label>
            <x-form.input
                name="query"
                placeholder="e.g. Minecraft"
                required
            />
            <x-button.medium-btn>Search</x-button.medium-btn>
        </form>

        @if($data && $data['total_results'] > 0)
            <div class="space-y-6">
                @foreach($data['results'] as $game)
                    @if($game['image'])
                        <x-game-card.game-card :game="$game" />
                    @endif
                @endforeach
            </div>
        @elseif($query)
            <p class="text-gray-400">No games found.</p>
        @endif

    </div>

</x-layout>
