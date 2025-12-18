<a
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center cursor-pointer
                   bg-nicegray h-[80px] w-[450px] border-2 border-coolyellow rounded-xl
                   text-white font-medium transition-colors duration-200
                   hover:bg-coolyellow hover:text-nicegray'
    ]) }}>
    {{ $slot }}
</a>
