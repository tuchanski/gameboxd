<div class="m-0">
    <div
        class="group bg-newgray w-[1500px] rounded-2xl mt-13
               px-6 py-6 mx-auto"
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

                    <p class="mt-3 text-small text-gray-400 leading-relaxed">
                        {{ $description }}
                    </p>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-between">
                <div class="text-white font-semibold">
                    Rating:
                    <span class="text-coolyellow">{{ $rating }}</span>
                </div>

                <div class="flex gap-4">
                    <x-button.small-link
                        href="/"
                        class="font-black border-red-500 hover:bg-red-500"
                    >
                        Cancel
                    </x-button.small-link>

                    <x-button.small-link>
                        Update
                    </x-button.small-link>

                    <form method="POST" action="{{ url()->current() }}">
                        @csrf
                        @method('DELETE')
                        <x-button.small-btn>
                            Delete
                        </x-button.small-btn>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
