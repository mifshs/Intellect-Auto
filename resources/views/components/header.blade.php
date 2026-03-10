 @vite(['resources/css/app.css', 'resources/js/app.js'])
<header class="pt-3 pb-3">
    <div class="container mx-auto px-4">
        <div class="">
            <div class="up-header flex grey500 justify-between text-xs mb-2 border-b-1 border-gray-300 pb-3 lg:flex hidden">
                <div class="dropdown-menu flex items-center  grid-cols-3 gap-x-2">
                    <p class=" grey400">Ваш город:</p>
                    <select name="brand" 
                            class=" appearance-none     cursor-pointer">
                            <option value=""  selected>Челябинск</option>
                            <option value="moscow">Москва</option>
                            <option value="samara">Самара</option>
                            <option value="volgograd">Волгоград</option>
                            <option value="novosibirsk">Новосибирск</option>
                    </select>
                    <img src="{{ asset('storage/images/Icon.png') }}" alt="треугольник" class="w-[6.67px] h-[3.33px] ml-[-8px]">
                </div>
                <div class="flex  grid-cols-4 gap-x-10">
                    <a href="#" class="hover:text-gray-800 active:scale-95">Акции</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">О компании</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">Адреса</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">Контакты</a>
                </div>
                <div>
                    8 (900) 000 00 00
                </div>
            </div>
            <div class="lg:flex hidden  bottom-header justify-between items-center">
                <a href="/"><img src="{{ asset('storage/images/logo.png') }}" alt="logo" class="h-[31px]"></a>

                <div class="flex ">
                    <a href="/index"> <button class="bg-[#0075B1] w-[103px] h-[36px] rounded-[6px] flex items-center content-center p-[13px] mr-2 hover:bg-[#006598] transition duration-150 ease-in-out active:scale-95 cursor-pointer">
                        <img src="{{ asset('storage/images/burger.png') }}" alt="burger" class="">
                        <p class="text-sm text-white mb-[1px] ml-[10.5px]">Каталог</p>
                    </button></a>
                    <div class="flex items-center border border-gray-200 rounded-[8px] text-sm px-3 py-2 w-[545px] h-[36px]
                     hover:border-blue-400 hover:shadow-sm hover:shadow-blue-100
                     focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-200 focus-within:shadow-md
                     active:border-blue-600 active:shadow-inner
                    transition-all duration-200 group max-lg:w-[250px]">
    
   
                    <img src="{{ asset('storage/images/magnifier.png') }}" alt="magnifier" 
                    class="w-4 h-4 opacity-50 group-hover:opacity-70 group-focus-within:opacity-100 group-focus-within:scale-110 
                    group-active:opacity-100 transition-all duration-200">
    

                    <input type="text" 
                    placeholder="Поиск" 
                    class="ml-[10px] w-full outline-none text-gray-500 bg-transparent
                     placeholder:text-gray-400 group-hover:placeholder:text-gray-500 
                     group-focus-within:placeholder:text-gray-600
                    transition-colors duration-200 ">
                    </div>
                </div>
                <div class="flex max-md:hidden">
                    <img src="{{ asset('storage/images/basket.png') }}" alt="basket" class="ml-1 hover:scale-105 active:scale-95 cursor-pointer">
                    <img src="{{ asset('storage/images/user.png') }}" alt="user" class="hover:scale-105 active:scale-95 cursor-pointer">
                </div>
            </div>
            <div class="container py-4 md:flex flex flex-row lg:hidden justify-between">
                <a href="/"><img src="{{ asset('storage/images/logo.png') }}" alt="logo" class="h-[31px]"></a>
                <button id="mobile-menu-btn" class="p-2 focus:outline-none">
                    <img src="{{ asset('storage/images/burger1.png') }}" alt="menu">
                </button>
            </div>

            <div id="mobile-menu" class="fixed inset-0 bg-black/50 z-50 hidden">
            <div class="absolute right-0 top-0 h-full w-[280px] bg-white shadow-lg transform transition-transform duration-300 translate-x-full" id="mobile-menu-panel">
                <div class="p-4">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-medium">Меню</h2>
                        <button id="mobile-menu-close" class="p-2 hover:bg-gray-100 rounded">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="mb-6 pb-4 border-b border-gray-200">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="logo" class="h-[31px]">
                    </div>
                    
                    <a href="/index" class="block py-3 px-4 bg-[#0075B1] text-white rounded-lg text-center mb-4">
                        Каталог товаров
                    </a>
                    
                    <nav class="space-y-2">
                        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-gray-50 rounded-lg transition">Акции</a>
                        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-gray-50 rounded-lg transition">О компании</a>
                        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-gray-50 rounded-lg transition">Адреса</a>
                        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-gray-50 rounded-lg transition">Контакты</a>
                    </nav>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <p class="text-sm text-gray-500 mb-2">Ваш город:</p>
                        <select name="city_mobile" 
                                class="w-full appearance-none bg-[#F8F8F8] border border-gray-200 rounded px-3 py-2 text-sm">
                            <option value="" selected>Челябинск</option>
                            <option value="moscow">Москва</option>
                            <option value="samara">Самара</option>
                            <option value="volgograd">Волгоград</option>
                            <option value="novosibirsk">Новосибирск</option>
                        </select>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <a href="tel:89000000000" class="block py-3 px-4 text-lg font-medium text-[#0075B1] bg-blue-50 rounded-lg text-center">
                            8 (900) 000 00 00
                        </a>
                    </div>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200 flex gap-4">
                        <a href="#" class="flex-1 flex items-center justify-center gap-2 py-3 px-4 bg-gray-100 rounded-lg">
                            <img src="{{ asset('storage/images/basket.png') }}" alt="basket" class="w-5 h-5">
                            <span class="text-sm">Корзина</span>
                        </a>
                        <a href="#" class="flex-1 flex items-center justify-center gap-2 py-3 px-4 bg-gray-100 rounded-lg">
                            <img src="{{ asset('storage/images/user.png') }}" alt="user" class="w-5 h-5">
                            <span class="text-sm">Профиль</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuPanel = document.getElementById('mobile-menu-panel');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.remove('hidden');
        setTimeout(() => {
            mobileMenuPanel.classList.remove('translate-x-full');
        }, 10);
    });

    mobileMenuClose.addEventListener('click', () => {
        mobileMenuPanel.classList.add('translate-x-full');
        setTimeout(() => {
            mobileMenu.classList.add('hidden');
        }, 300);
    });

    mobileMenu.addEventListener('click', (e) => {
        if (e.target === mobileMenu) {
            mobileMenuPanel.classList.add('translate-x-full');
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 300);
        }
    });
</script>
</header>