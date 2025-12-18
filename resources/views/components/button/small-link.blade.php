<a
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center cursor-pointer
                   bg-nicegray h-[65px] w-[135px] border-2 border-coolyellow rounded-xl
                   text-white font-light transition-colors duration-200
                   hover:bg-coolyellow hover:text-nicegray'
    ]) }}>
    {{ $slot }}
</a>
