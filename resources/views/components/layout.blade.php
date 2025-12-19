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
        <div class="mt-[90px]">

            <x-menu></x-menu>

            <div class="mb-[30px]">
                <x-post href="#" title="The Legend of Zelda: Breath of the Wild"
                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                        image="https://placehold.co/90x90"
                        rating="9/10"/>
            </div>
            <div class="mb-[30px]">
                <x-post href="#" title="The Legend of Zelda: Breath of the Wild"
                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                        image="https://placehold.co/90x90"
                        rating="9/10"/>
            </div>
            <div class="mb-[30px]">
                <x-post href="#" title="The Legend of Zelda: Breath of the Wild"
                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                        image="https://placehold.co/90x90"
                        rating="9/10"/>
            </div>
            <div class="mb-[30px]">
                <x-post href="#" title="The Legend of Zelda: Breath of the Wild"
                        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit..."
                        image="https://placehold.co/90x90"
                        rating="9/10"/>
            </div>



        </div>
    </main>

</body>
</html>
