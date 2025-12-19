<a
    href="{{ $href }}"
    class="group bg-newgray w-[1000px] h-[200px] rounded-2xl
           flex items-center px-6 relative
           transition-all duration-300 ease-out
           hover:-translate-y-1
           hover:shadow-xl hover:shadow-black/40
           hover:ring-1 hover:ring-coolyellow/60"
>

    <div class="flex items-center gap-6">
        <img
            class="rounded-full w-[90px] h-[90px] object-cover
                   transition-transform duration-300
                 "
            src="{{ $image }}"
            alt="{{ $title }}"
        >

        <div class="flex flex-col">
            <h2
                class="text-xl font-semibold text-coolyellow
                       transition-colors duration-300
                       "
            >
                {{ $title }}
            </h2>

            <p class="mt-[12px] text-sm text-gray-400 line-clamp-3">
                {{ $description }}
            </p>
        </div>
    </div>

    <div
        class="absolute top-6 right-6 text-white font-semibold
               transition-transform duration-300
               group-hover:scale-105"
    >
        Rating: <span class="text-coolyellow">{{ $rating }}</span>
    </div>

</a>
