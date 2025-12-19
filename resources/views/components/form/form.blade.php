<form method="POST" action="/submit">
    @csrf
    <div>
        <x-form.label for="email">Email</x-form.label>
        <x-form.input placeholder="email@example.com" id="email" name="email" type="email"></x-form.input>
    </div>

    <x-form.error name="email"></x-form.error>

    <div class="mt-3">
        <x-form.label for="password">Password</x-form.label>
        <x-form.input placeholder="*********" id="password" name="password" type="password"></x-form.input>
    </div>

    <x-form.error name="password"></x-form.error>

    <x-button.medium-btn>Login</x-button.medium-btn>
</form>
