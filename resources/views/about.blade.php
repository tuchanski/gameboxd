<x-layout>
    <div class="min-h-[calc(100vh-248px)] w-full flex flex-col items-center justify-center text-center px-6">

        <h2 class="text-4xl font-bold text-coolyellow mb-6">
            About <span class="text-white">Gameboxd</span>
        </h2>

        <p class="max-w-[720px] text-gray-400 text-lg leading-relaxed">
            Gameboxd is a personal game library where players can rate games and keep track of what they’ve played.
            Organize your collection, register your experiences, and build your own gaming history in one place.
        </p>

        <div class="flex gap-5">
            <x-button.small-link href="/" class="mt-5">Dashboard 📄</x-button.small-link>
            <x-button.small-link href="/games" class="mt-5">Create 🛠️</x-button.small-link>
        </div>

    </div>
</x-layout>
