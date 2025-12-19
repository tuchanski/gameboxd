<x-layout>
    <main class="flex-1 flex flex-col items-center">
        <div class="mt-[90px] w-full flex flex-col items-center">

            <x-menu name="{{Auth::user()->name}}"/>

            <x-post
                href="#"
                title="The Legend of Zelda: Breath of the Wild"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                image="https://placehold.co/90x90"
                rating="9/10"
            />
            <x-post
                href="#"
                title="The Legend of Zelda: Breath of the Wild"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                image="https://placehold.co/90x90"
                rating="9/10"
            />
            <x-post
                href="#"
                title="The Legend of Zelda: Breath of the Wild"
                description="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                image="https://placehold.co/90x90"
                rating="9/10"
            />

        </div>
    </main>
</x-layout>
