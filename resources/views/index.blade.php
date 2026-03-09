<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="IntellectAuto" />
    <link rel="manifest" href="/site.webmanifest" />
    <title>ИНТЕЛЛЕКТ-АВТО</title>
</head>
<body>
    <x-header></x-header>

    <div class="bg-[#F1F1F1] min-h-screen pb-10">
        <div class="container mx-auto px-4 pt-5">
            
            <div class="mb-3">
                <span class="text-gray-500 text-[12px] font-normal">Главная / Каталог товаров</span>
            </div>
            
            <h1 class="text-[24px] text-black font-medium mb-6">Каталог товаров</h1>

            <div class="flex flex-col lg:flex-row gap-6 items-start">
                
                <div class="w-full lg:w-[280px] flex-shrink-0">
                    
                    <div class=" mb-4">                        
                        <div class="mb-4">
                            <input type="range" min="100" max="1000000" value="10000" step="1000" 
                                   class="w-[200px] h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-blue-600">
                        </div>

                        <div class="flex gap-2">
                            <div class="relative flex">
                                <input type="text" placeholder="Input ₽" 
                                    class="w-[100px] px-3 py-2 bg-[#F8F8F8] border border-gray-200 rounded-[10px] focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div class="relative flex">
                                <input type="text" placeholder="Input ₽" 
                                       class="w-[100px] px-3 py-2 bg-[#F8F8F8] border border-gray-200 rounded-[10px] focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </div>
                    <div class="pt-5">
                        <h3 class="text-[18px] font-medium text-black mb-4">Категория</h3>
                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" checked 
                                       class="w-4 h-4 border-2 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-600 text-[14px]">Option</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" 
                                       class="w-4 h-4 border-2 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-600 text-[14px]">Option</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" 
                                       class="w-4 h-4 border-2 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-600 text-[14px]">Option</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" 
                                       class="w-4 h-4 border-2 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-600 text-[14px]">Option</span>
                            </label>
                        </div>
                    </div>

                    <div class="pt-5">
                        <h3 class="text-[18px] font-medium text-black mb-4">Бренд</h3>
                        <div class="space-y-3">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" checked 
                                       class="w-4 h-4 border-2 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-600 text-[14px]">Option</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" 
                                       class="w-4 h-4 border-2 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-600 text-[14px]">Option</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" 
                                       class="w-4 h-4 border-2 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-600 text-[14px]">Option</span>
                            </label>
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" 
                                       class="w-4 h-4 border-2 border-gray-300 rounded text-blue-600 focus:ring-blue-500">
                                <span class="ml-3 text-gray-600 text-[14px]">Option</span>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="flex-1">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @for ($i = 0; $i < 12; $i++)
                            <x-card></x-card>
                        @endfor
                    </div>
                        <div class="flex flex-row items-center justify-center gap-[12px] pt-5">
                            <div class="w-[44px] h-[44px] flex items-center justify-center border border-grey-200 rounded-[8px] hover:border-[#006598] transition cursor-pointer">
                                <img src="{{ asset('storage/images/arrow4.png') }}" alt="стрелка">
                            </div>
                            <div class="w-[44px] h-[44px] flex items-center justify-center border border-grey-200 rounded-[8px] hover:border-[#006598] transition cursor-pointer">
                                <span>1</span>
                            </div>
                            <div class="w-[44px] h-[44px] flex items-center justify-center border border-grey-200 rounded-[8px] hover:border-[#006598] transition cursor-pointer">
                                <span>2</span>
                            </div>
                            <div class="w-[44px] h-[44px] flex items-center justify-center border border-grey-200 rounded-[8px] hover:border-[#006598] transition cursor-pointer">
                                <span>3</span>
                            </div>
                            <div class="w-[44px] h-[44px] flex items-center justify-center scale-x-[-1] border border-grey-200 rounded-[8px] hover:border-[#006598] transition cursor-pointer">
                                <img src="{{ asset('storage/images/arrow4.png') }}" alt="стрелка">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>



    <x-footer>
    </x-footer>
</body>
</html>