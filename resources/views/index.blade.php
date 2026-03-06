<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <title>ИНТЕЛЛЕКТ-АВТО</title>
</head>
<body>

    <x-header>
    </x-header>

    <div class="bg-[#F1F1F1]">
        <div class="pt-5 container grid grid-cols-2">

            <div class="flex flex-col items-start">
                <div>
                    <span class="grey500 text-[12px] font-normal">Главная / Каталог товаров</span>
                </div>
                <div class="mt-2 flex flex-col items-center justify-center">
                    <span class="text-[24px] text-black font-medium">Каталог товаров</span>
                    <div>
                        <input type="range" min="100" max="1000000" value="1000" step="100">
                    </div>
                    <div class="flex items-center justify-center">
                        <input type="text" value="Input ₽">
                        <input type="text" value="Input ₽">
                    </div>
                </div>
            </div>

            <div class="flex items-start">
                <div class="grid grid-cols-4">
                    <div>
                        @for ($i = 0; $i < 12; $i++)
                            <x-card></x-card>
                        @endfor
                    </div>
                </div>
            </div>


        </div>
    </div>
   
</body>
</html>

