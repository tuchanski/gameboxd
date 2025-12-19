<x-base.base>
    <div class="min-h-screen w-full flex items-center justify-center">

        <div class="w-full max-w-6xl px-12 flex items-center justify-between">

            <div>
                <form method="POST" action="/register" class="flex flex-col gap-4">
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

                    <x-form.error name="email" />

                    <div>
                        <x-form.label for="name">Name</x-form.label>
                        <x-form.input
                            placeholder="John Doe"
                            id="name"
                            name="name"
                            type="text"
                            required
                        />
                    </div>

                    <x-form.error name="name" />

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

                    <x-form.error name="password" />

                    <div>
                        <x-form.label for="password_confirmation">Confirm Password</x-form.label>
                        <x-form.input
                            placeholder="*********"
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            required
                        />
                    </div>
                    <x-button.medium-btn>Register</x-button.medium-btn>
                    <a class="mt-3 text-center hover:text-coolyellow transition:colors duration-200" href="/login">Or click here to sign in</a>
                </form>

            </div>

            <div >
                <img class="w-[350px] h-auto" src="{{ asset('images/base-logo.svg') }}">
                <p class="text-center font-light">Reviews by players. For Players.  </p>
            </div>
        </div>
    </div>
</x-base.base>
