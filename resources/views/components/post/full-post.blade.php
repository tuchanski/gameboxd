<div class="m-0">
    <div
        class="group bg-newgray w-[1000px] rounded-2xl
               px-6 py-6"
    >

        <div class="flex flex-col h-full">

            <div class="flex items-start gap-6">
                <img
                    class="rounded-full w-[90px] h-[90px] object-cover flex-shrink-0"
                    src="{{ $image }}"
                    alt="{{ $title }}"
                >

                <div class="flex flex-col">
                    <h2 class="text-xl font-semibold text-coolyellow">
                        {{ $title }}
                    </h2>

                    <p class="mt-3 text-sm text-gray-400 leading-relaxed">
                        {{ $description }}
                    </p>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-between">
                <div class="text-white font-semibold">
                    Rating: <span class="text-coolyellow">{{ $rating }}</span>
                </div>

                <div class="flex gap-4">
                    <x-button.small-link href="/" class="font-black border-red-500 hover:bg-red-500">Cancel</x-button.small-link>
                    <x-button.small-link>Update</x-button.small-link>
                    <x-button.small-link>Delete</x-button.small-link>
                </div>
            </div>

        </div>
    </div>
</div>
