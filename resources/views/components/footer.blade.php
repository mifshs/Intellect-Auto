@vite(['resources/css/app.css', 'resources/js/app.js'])
<footer>
    <div class="container pb-[85px] pt-10 flex justify-between">
        <div class="">
            <img src="{{ asset('storage/images/logo.png') }}" alt="logo" class="h-[31px] mb-6">
            <div class="mb-[61px] flex grid-cols-3 gap-x-[10px]">
                <img src="{{ asset('storage/images/vk.png') }}" alt="vk" class="h-[32px] mb-6 hover:scale-105 active:scale-95 cursor-pointer"  >
                <img src="{{ asset('storage/images/gmail.png') }}" alt="gmail" class="h-[32px] mb-6 hover:scale-105 active:scale-95 cursor-pointer">
                <img src="{{ asset('storage/images/tg.png') }}" alt="tg" class="h-[32px] mb-6 hover:scale-105 active:scale-95 cursor-pointer">
            </div>
            <p class="grey500 text-xs">© ООО Интеллект-Авто 2025</p>
        </div>
        <div class="flex grey500 text-xs w-[480px] justify-between flex-wrap">
            <div class="">
                <p class="mb-5 grey600">Покупателям</p>
                <div class="flex flex-col grid-cols-5 gap-y-3">
                    <a href="#" class="hover:text-gray-800 active:scale-95">Акции</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">О компании</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">Доставка</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">Адреса</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">Контакты</a>
                </div>
            </div>
            <div>
                  <p class="mb-5 grey600">Информация</p>
                <div class="flex flex-col grid-cols-5 gap-y-3">
                    <a href="#" class="hover:text-gray-800 active:scale-95">Реквизиты</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">Офферта</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">Политика<br/> конфиденциальности</a>
                  
                </div>
            </div>
            <div>
                <p class="mb-5 grey600">Контакты</p>
                <div class="flex flex-col grid-cols-5 gap-y-3">
                    <a href="#" class="hover:text-gray-800 active:scale-95">8 (900) 000 00 00</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">email@gmail.com</a>
                    <a href="#" class="hover:text-gray-800 active:scale-95">г. Челябинск, ул. Разина,<br/> д. 3 офис 908/19</a>
                
                </div>
            </div>
        </div>
    </div>
</footer>