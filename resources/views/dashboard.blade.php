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

    <x-post
        href="#"
        title="The Legend of Zelda: Breath of the Wild"
        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
        image="https://placehold.co/90x90"
        rating="9/10"
    />

</x-layout>

