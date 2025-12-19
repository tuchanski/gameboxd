@props(['name'])

<div class="flex justify-between items-center bg-newgray rounded-xl mb-[85px] mt-[100px] w-[1000px] h-[110px]">
    <div class="text-xl ml-[50px]">
        <p>Let's start reviewing, <span class="text-coolyellow">{{$name}}</span>!</p>
    </div>
    <div class="flex mr-[50px]">
        <div class="mr-[25px]">
            <x-button.small-link href="/search">Search</x-button.small-link>
        </div>
        <div>
            <x-button.small-link href="/create">Create</x-button.small-link>
        </div>
    </div>
</div>
