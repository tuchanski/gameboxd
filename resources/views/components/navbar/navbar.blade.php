<nav class="fixed top-0 left-0 w-full h-[100px]  py-4 bg-navbar z-50">
    <div class="flex h-full items-center justify-between">
        <div class="flex items-center ml-[48px]">
            <a href="/">
                <img src="{{ asset('images/base-logo.svg') }}" alt="gameboxd" class="h-12">
            </a>
        </div>
        <div class="flex items-center gap-6 text-xl mr-[48px]">
            <x-navbar.nav-link href="/">Home</x-navbar.nav-link>
            <x-navbar.nav-link href="/about">About</x-navbar.nav-link>
            <x-navbar.nav-link href="/logout">Log Out</x-navbar.nav-link>
        </div>
    </div>
</nav>
