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
            
           

            <div class="flex flex-col lg:flex-row gap-6 items-start ">
                
                <div class="flex flex-col w-full lg:w-[280px] max-lg:flex-row flex-shrink-0 justify-between max-sm:flex-col">
                    
                    <div>
                        <div class="mb-3">
                            <span class="text-gray-500 text-[12px] font-normal max-md:hidden">Главная / Каталог товаров</span>
                        </div>
            
                        <h1 class="text-[24px] text-black font-medium mb-6 max-md:text-[28px]">Каталог товаров</h1>
                    </div>

                   <div class="flex items-center w-full hidden max-md:block max-md:flex">
  
                        <div class="flex items-center border border-gray-200 rounded-[8px] text-sm px-3 py-2 h-[36px] w-full
                            hover:border-blue-400 hover:shadow-sm hover:shadow-blue-100
                            focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-200 focus-within:shadow-md
                            active:border-blue-600 active:shadow-inner
                            transition-all duration-200 group bg-white max-md:ml-[12px] max-sm:ml-[0px]">
    
                            <img src="{{ asset('images/magnifier.png') }}" alt="magnifier" 
                            class="w-4 h-4 opacity-50 group-hover:opacity-70 group-focus-within:opacity-100 group-focus-within:scale-110 
                            group-active:opacity-100 transition-all duration-200 flex-shrink-0">
    
                            <input type="text" 
                            placeholder="Поиск" 
                            class="ml-[10px] w-full min-w-0 outline-none text-gray-500 bg-transparent
                            placeholder:text-gray-400 group-hover:placeholder:text-gray-500 
                            group-focus-within:placeholder:text-gray-600
                            transition-colors duration-200 ml-[2">
                        </div>
  
  
                        <a href="/index" class="flex-shrink-0" id="filterButton" onclick="toggleFilterModal(event)">
                            <button class="bg-[#0075B1] ml-[12px] rounded-[6px] flex items-center p-[8px] 
                            hover:bg-[#006598] transition duration-150 ease-in-out 
                            active:scale-95 cursor-pointer">
                            <img src="{{ asset('images/filter.png') }}" alt="filter">
                            </button>
                        </a>
                    </div>






                   
                    <div id="filterModal" class="fixed inset-0 z-50 hidden md:hidden">
  
                        <div class="absolute inset-0 bg-black/50 transition-opacity" onclick="closeFilterModal()"></div>

    
                        <div class="absolute bottom-0 left-0 right-0 bg-white h-[100vh] transform transition-transform duration-300 ease-out translate-y-0" 
                            style="transition: transform 0.3s ease-out;">
        
        
                            <div class="h-full overflow-y-auto pl-4 pr-4">
          
                                <div class="flex justify-between mt-5 mb-4">
                <h2 class="text-[24px] mt-3 font-medium">Фильтры</h2>
                <button onclick="closeFilterModal()" class="p-1 mt-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="mb-4"> 
                <p class="mb-[14px] font-medium text-[18px]">Цена</p>                       
                <div class="mb-4">
                    <input type="range" min="100" max="1000000" value="10000" step="1000" 
                        class="w-full h-1 bg-gray-200 rounded-lg appearance-none cursor-pointer accent-blue-600">
                </div>

                <div class="flex gap-4 w-full">
                    <div class="relative flex-1">
                        <input type="text" placeholder="Input ₽" 
                            class="w-full px-3 py-2 border border-gray-200 rounded-[10px] focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="relative flex-1">
                        <input type="text" placeholder="Input ₽" 
                            class="w-full px-3 py-2 border border-gray-200 rounded-[10px] focus:outline-none focus:ring-2 focus:ring-blue-500">
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

            <div class="pt-5 mb-6">
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

          
            <div class="pb-24">
                <a class="text-[#B3261E] cursor-pointer">
                    Очистить фильтры
                </a>
            </div>
        </div>
        
       
        <button class="absolute bottom-[24px] left-4 right-4 bg-[#0075B1] text-white text-[16px] p-3 rounded-[8px] " onclick="closeFilterModal()">
            Показать товары
        </button>
    </div>
</div>
                   






                    <div class=" mb-4 max-md:hidden">                        
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
                    <div class="pt-5  max-md:hidden">
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

                    <div class="pt-5  max-md:hidden">
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
                <div class="flex-1 flex flex-col max-lg:m-auto">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @foreach($products as $product)
                        @for ($i = 0; $i < 12; $i++)
                            <x-card :product="$product"></x-card>
                        @endfor
                        @endforeach
                    </div>
                        <div class="flex flex-row items-center justify-center gap-[12px] pt-5">
                            <div class="w-[44px] h-[44px] flex items-center justify-center border border-grey-200 rounded-[8px] hover:border-[#006598] transition cursor-pointer">
                                <img src="{{ asset('images/arrow4.png') }}" alt="стрелка">
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
                                <img src="{{ asset('images/arrow4.png') }}" alt="стрелка">
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>



    <x-footer>
    </x-footer>
</body>

<script>
function toggleFilterModal(event) {
    event.preventDefault();
    const modal = document.getElementById('filterModal');
    modal.classList.toggle('hidden');
    // Блокируем прокрутку основного контента
    document.body.style.overflow = modal.classList.contains('hidden') ? '' : 'hidden';
}

function closeFilterModal() {
    const modal = document.getElementById('filterModal');
    modal.classList.add('hidden');
    document.body.style.overflow = '';
}

// Закрытие по ESC
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeFilterModal();
    }
});
</script>
</html>