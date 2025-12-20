<x-layout>
    <x-menu name="{{Auth::user()->name}}"/>

    @foreach($reviews as $review)
        <x-post
            href="/reviews/{{$review->id}}"
            title="Placeholder"
            description="{{$review->body}}"
            image="https://placehold.co/90x90"
            rating="{{$review->rating}}"
        />
    @endforeach

</x-layout>

