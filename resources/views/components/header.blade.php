 @vite(['resources/css/app.css', 'resources/js/app.js'])
<header class="pt-3 pb-3">
    <div class="container">
        <div class="">
            <div class="up-header flex grey500 justify-between text-xs mb-2 border-b-1 border-gray-300 pb-3">
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
            <div class="bottom-header flex justify-between items-center">
                <img src="{{ asset('storage/images/logo.png') }}" alt="logo" class="h-[31px]">

                <div class="flex ">
                    <button class="bg-[#0075B1] w-[103px] h-[36px] rounded-[6px] flex items-center content-center p-[13px] mr-2 hover:bg-[#006598] transition duration-150 ease-in-out active:scale-95 cursor-pointer">
                        <img src="{{ asset('storage/images/burger.png') }}" alt="burger" class="">
                        <p class="text-sm text-white mb-[1px] ml-[10.5px]">Каталог</p>
                    </button>
                    <div class="flex items-center border border-gray-200 rounded-[8px] text-sm px-3 py-2 w-[545px] h-[36px]
                     hover:border-blue-400 hover:shadow-sm hover:shadow-blue-100
                     focus-within:border-blue-500 focus-within:ring-2 focus-within:ring-blue-200 focus-within:shadow-md
                     active:border-blue-600 active:shadow-inner
                    transition-all duration-200 group">
    
   
                    <img src="{{ asset('storage/images/magnifier.png') }}" alt="magnifier" 
                    class="w-4 h-4 opacity-50 group-hover:opacity-70 group-focus-within:opacity-100 group-focus-within:scale-110 
                    group-active:opacity-100 transition-all duration-200">
    

                    <input type="text" 
                    placeholder="Поиск" 
                    class="ml-[10px] w-full outline-none text-gray-500 bg-transparent
                     placeholder:text-gray-400 group-hover:placeholder:text-gray-500 
                     group-focus-within:placeholder:text-gray-600
                    transition-colors duration-200">
                    </div>
                </div>
                <div class="flex">
                    <img src="{{ asset('storage/images/basket.png') }}" alt="basket" class="ml-1 hover:scale-105 active:scale-95 cursor-pointer">
                    <img src="{{ asset('storage/images/user.png') }}" alt="user" class="hover:scale-105 active:scale-95 cursor-pointer">
                </div>
            </div>
        </div>
    </div>
</header>