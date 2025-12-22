@props([
    'action',
    'method' => 'POST',
    'review' => null,
    'gameId' => null,
    'title' => null,
    'image' => null,
    'year' => null,
    'submitText' => 'Publish review',
    'body' => null,
    'rating' => null
])

<form method="POST" action="{{ $action }}" class="flex flex-col gap-6">
    @csrf
    @if($method !== 'POST')
        @method($method)
    @endif


    @if($gameId)
        <input type="hidden" name="game_id" value="{{ $gameId }}">
        <input type="hidden" name="title" value="{{ $title }}">
        <input type="hidden" name="image" value="{{ $image }}">
        <input type="hidden" name="year" value="{{ $year }}">
    @endif

    <div>
        <x-form.label>Rating</x-form.label>
        <x-form.input
            type="number"
            name="rating"
            min="0"
            max="10"
            step="0.5"
            placeholder="0 – 10"
            value="{{ old('rating', $review?->rating ?? $rating) }}"
            required
        />
    </div>

    <div>
        <x-form.label>Review</x-form.label>
        <textarea
            name="body"
            rows="6"
            class="w-full rounded-xl bg-nicegray border border-nicegray
           text-white px-4 py-3 focus:outline-none
           focus:ring-2 focus:ring-coolyellow/60"
            required
        >{{ old('body', $review?->body ?? $body) }}</textarea>
    </div>

    <div class="flex justify-end">

        <div>
            <x-button.small-link
                href="/"
                class="font-black border-red-500 hover:bg-red-500 mr-[10px]"
            >
                Cancel
            </x-button.small-link>

            <x-button.medium-btn>
                {{ $submitText }}
            </x-button.medium-btn>
        </div>

    </div>

</form>
