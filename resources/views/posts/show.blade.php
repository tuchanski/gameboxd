<x-layout>
    <div class="min-h-[calc(100vh-248px)] w-full flex items-center justify-center">

    <x-post.full-post
            title="The Legend of Zelda: Breath of the Wild"
            description="{{$review->body}}"
            image="https://placehold.co/90x90"
            rating="{{$review->rating}}"
        />
    </div>
</x-layout>
