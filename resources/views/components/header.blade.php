 @vite(['resources/css/app.css', 'resources/js/app.js'])
<header class="pt-3 pb-3">
    <div class="container">
        <div class="">
            <div class="up-header flex grey500 justify-between text-xs mb-2 border-b-1 border-gray-300 pb-3">
                <div class="dropdown-menu flex items-center  grid-cols-3 gap-x-2">
                    <p class=" grey400">Ваш город:</p>
                    <p class="">Челябинск</p>
                    <img src="{{ asset('storage/images/Icon.png') }}" alt="треугольник" class="w-[6.67px] h-[3.33px] ml-[4px]">
                </div>
                <div class="flex  grid-cols-4 gap-x-10">
                    <a href="#">Акции</a>
                    <a href="#">О компании</a>
                    <a href="#">Адреса</a>
                    <a href="#">Контакты</a>
                </div>
                <div>
                    8 (900) 000 00 00
                </div>
            </div>
            <div class="bottom-header flex justify-between items-center">
                <img src="{{ asset('storage/images/logo.png') }}" alt="logo" class="h-[31px]">

                <div class="flex ">
                    <button class="bg-[#0075B1] w-[103px] h-[36px] rounded-[6px] flex items-center content-center p-[13px] mr-2">
                        <img src="{{ asset('storage/images/burger.png') }}" alt="burger" class="">
                        <p class="text-sm text-white mb-[1px] ml-[10.5px]">Каталог</p>
                    </button>
                    <div class="flex items-center border border-gray-200 rounded-[8px] text-sm px-3 py-2 w-[545px] h-[36px]">
                        <img src="{{ asset('storage/images/magnifier.png') }}" alt="magnifier" class="">
                        <input type="text" placeholder="Поиск" class="ml-[10px] w-full outline-none grey500">
                    </div>
                </div>
                <div class="flex">
                    <img src="{{ asset('storage/images/basket.png') }}" alt="basket" class="ml-1">
                    <img src="{{ asset('storage/images/user.png') }}" alt="user" class="">
                </div>
            </div>
        </div>
    </div>
</header>