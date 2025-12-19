<x-base.base title="Login | Gameboxd">
    <div class="min-h-screen w-full flex items-center justify-center">

        <div class="w-full max-w-6xl px-12 flex items-center justify-between">

            <div >
                <img class="w-[350px] h-auto" src="{{ asset('images/base-logo.svg') }}">
                <p class="text-center font-light">Reviews by players. For Players.  </p>
            </div>

            <div>
                <form method="POST" action="/login" class="flex flex-col gap-4">
                    @csrf
                    <div>
                        <x-form.label for="email">Email</x-form.label>
                        <x-form.input
                            placeholder="email@example.com"
                            id="email"
                            name="email"
                            type="email"
                            required
                        />
                    </div>

                    <div>
                        <x-form.label for="password">Password</x-form.label>
                        <x-form.input
                            placeholder="*********"
                            id="password"
                            name="password"
                            type="password"
                            required
                        />
                    </div>

                    <x-form.error name="credentials" />

                    <x-button.medium-btn>Login</x-button.medium-btn>
                    <a class="mt-3 text-center hover:text-coolyellow transition:colors duration-200" href="/register">Or click here to sign up</a>
                </form>

            </div>

        </div>
    </div>
</x-base.base>
