<a
    {{ $attributes->merge([
        'class' => 'mt-6 inline-flex items-center justify-center cursor-pointer
                   bg-newgray h-[80px] w-[450px] border-2 border-coolyellow rounded-xl
                   text-white text-2xl font-light transition-colors duration-200
                   hover:bg-coolyellow hover:text-nicegray'
    ]) }}>
    {{ $slot }}
</a>
