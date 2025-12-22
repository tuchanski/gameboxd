<x-layout>
    <div class="min-h-[calc(100vh-248px)] w-full flex items-center justify-center">

    <x-post.full-post
            title="{{$review->title}}"
            description="{{$review->body}}"
            image="{{$review->image}}"
            rating="{{$review->rating}}"
            id="{{$review->id}}"
        />
    </div>
</x-layout>
