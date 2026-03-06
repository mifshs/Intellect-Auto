@vite(['resources/css/app.css', 'resources/js/app.js'])
<footer>
    <div class="container pb-[85px] pt-10 flex justify-between">
        <div class="">
            <img src="{{ asset('storage/images/logo.png') }}" alt="logo" class="h-[31px] mb-6">
            <div class="mb-[61px] flex grid-cols-3 gap-x-[10px]">
                <img src="{{ asset('storage/images/vk.png') }}" alt="vk" class="h-[32px] mb-6">
                <img src="{{ asset('storage/images/gmail.png') }}" alt="gmail" class="h-[32px] mb-6">
                <img src="{{ asset('storage/images/tg.png') }}" alt="tg" class="h-[32px] mb-6">
            </div>
            <p class="grey500 text-xs">© ООО Интеллект-Авто 2025</p>
        </div>
        <div class="flex grey500 text-xs w-[480px] justify-between flex-wrap">
            <div class="">
                <p class="mb-5 grey600">Покупателям</p>
                <div class="flex flex-col grid-cols-5 gap-y-3">
                    <a href="#">Акции</a>
                    <a href="#">О компании</a>
                    <a href="#">Доставка</a>
                    <a href="#">Адреса</a>
                    <a href="#">Контакты</a>
                </div>
            </div>
            <div>
                  <p class="mb-5 grey600">Информация</p>
                <div class="flex flex-col grid-cols-5 gap-y-3">
                    <a href="#">Реквизиты</a>
                    <a href="#">Офферта</a>
                    <a href="#">Политика<br/> конфиденциальности</a>
                  
                </div>
            </div>
            <div>
                <p class="mb-5 grey600">Контакты</p>
                <div class="flex flex-col grid-cols-5 gap-y-3">
                    <a href="#">8 (900) 000 00 00</a>
                    <a href="#">email@gmail.com</a>
                    <a href="#">г. Челябинск, ул. Разина,<br/> д. 3 офис 908/19</a>
                
                </div>
            </div>
        </div>
    </div>
</footer>