<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col items-center text-white bg-nicegray min-h-screen">

    <x-navbar></x-navbar>

    <main class="pt-[100px]">
        <div class="mt-100">
            <x-button.small-btn>
                Clique aqui
            </x-button.small-btn>
            <x-button.small-link href="/fortnite">
                Registre
            </x-button.small-link>

            <x-button.medium-btn>
                Login
            </x-button.medium-btn>

            <x-button.medium-link href="/teste">
                Clica aqui dnv
            </x-button.medium-link>
        </div>
    </main>

</body>
</html>
