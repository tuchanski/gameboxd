<x-layout>
    <x-menu name="{{ Auth::user()->name }}" />

    <div class="flex flex-col gap-6 mt-6">

        @forelse($reviews as $review)
            <x-post
                href="/reviews/{{ $review->id }}"
                title="{{ $review->title }}"
                description="{{ $review->body }}"
                image="{{ $review->image }}"
                rating="{{ $review->rating }}"
            />
        @empty
            <div class="mt-8 text-center text-gray-400">
                <p class="text-lg">😕 No reviews found</p>
                <p class="text-sm">When you start reviewing, it will show up here.</p>
            </div>
        @endforelse

    </div>

    @if ($reviews->hasPages())
        <div class="mt-10 flex justify-center">
            {{ $reviews->links() }}
        </div>
    @endif

</x-layout>
