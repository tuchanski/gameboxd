<x-layout>

    <div class="mt-30 flex flex-col justify-center items-center border border-coolyellow rounded-xl p-10">

        <form method="GET" action="/games" class="mt-10 mb-10 flex flex-col">
            <x-form.label>Game name</x-form.label>
            <x-form.input name="query" placeholder="Search for a game..." />
            <x-button.medium-btn>Search here</x-button.medium-btn>
        </form>

        @if($data && $data['total_results'] > 0)
            <div class="space-y-6">
                @foreach($data['results'] as $game)
                    @if($game['image'] != null)
                        <x-game-card.game-card :game="$game" />
                    @endif
                @endforeach
            </div>
        @elseif($query)
            <p class="text-gray-400">No games found.</p>
        @endif

    </div>

</x-layout>
