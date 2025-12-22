<x-layout>

    <div class="w-full max-w-3xl mx-auto mt-10 px-4">

        <x-review.review-header
            :image="$review['image']"
            :title="$review['title']"
        />

        <div class="bg-newgray border border-nicegray rounded-2xl p-8">
            <x-review.review-form
                :action="route('review.update', $review)"
                game-id="{{ $review['game_id']}}"
                method="PATCH"
                title="{{ $review['title'] }}"
                image="{{ $review['image'] }}"
                body="{{$review['body']}}"
                rating="{{$review['rating']}}"
                submit-text="Edit review"
            />
        </div>

    </div>

</x-layout>
