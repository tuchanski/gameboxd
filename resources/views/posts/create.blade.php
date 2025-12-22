<x-layout>

    <div class="w-full max-w-3xl mx-auto mt-12 px-4">

        <x-review.review-header
            :image="$image"
            :title="$title"
            :year="$year"
        />

        <div class="bg-newgray border border-nicegray rounded-2xl p-8">
            <x-review.review-form
                :action="route('review.store')"
                game-id="{{ $gameId }}"
                title="{{ $title }}"
                image="{{ $image }}"
                year="{{ $year }}"
                submit-text="Create Review"
            />
        </div>

    </div>

</x-layout>
