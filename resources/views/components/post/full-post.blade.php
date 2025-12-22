<div class="m-0 px-4 mt-12">
    <div
        class="group bg-newgray w-full max-w-[1000px] h-auto rounded-2xl
               px-4 sm:px-6 py-6 mx-auto"
    >

        <div class="flex flex-col h-full gap-6">


            <div class="flex flex-col sm:flex-row items-start gap-4 sm:gap-6">
                <img
                    class="rounded-full w-[70px] h-[70px] sm:w-[90px] sm:h-[90px]
                           object-cover flex-shrink-0"
                    src="{{ $image }}"
                    alt="{{ $title }}"
                >

                <div class="flex flex-col">
                    <h2 class="text-lg sm:text-xl font-semibold text-coolyellow">
                        {{ $title }}
                    </h2>

                    <p class="mt-2 sm:mt-3 text-sm text-gray-400 leading-relaxed">
                        {{ $description }}
                    </p>
                </div>
            </div>

            <div
                class="flex flex-col sm:flex-row gap-4
                       sm:items-center sm:justify-between"
            >
                <div class="text-white font-semibold">
                    Rating:
                    <span class="text-coolyellow">{{ $rating }}</span>
                </div>

                <div class="flex flex-wrap gap-3">

                    <x-button.small-link href="/reviews/{{$id}}/edit">
                        Update
                    </x-button.small-link>

                    <form method="POST" action="{{ url()->current() }}">
                        @csrf
                        @method('DELETE')
                        <x-button.small-btn class="border-red-500 hover:bg-red-500">
                            Delete
                        </x-button.small-btn>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
