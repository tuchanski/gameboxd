<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gameboxd</title>
    <link rel="shortcut icon" type="imagex/svg" href="{{asset('/images/dots-logo.svg')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col bg-nicegray text-white">

    <x-navbar />
    <main class="flex-1 flex flex-col items-center">
        <div class="mt-[90px] w-full flex flex-col items-center">
            {{$slot}}
        </div>
    </main>
    <x-footer />

</body>
</html>
