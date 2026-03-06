<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ИНТЕЛЛЕКТ-АВТО</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

</head>
<body>
    <x-header>
    </x-header>
    <div class=" text-white h-[700px] flex items-center justify-center bg-no-repeat bg-cover" style="background-image: url('{{ asset('storage/images/bg-main.png') }}');">
        <div class="container">
            <div>
                <h1 class="ibm text-[72px] font-bold text-left text-white w-[822px] mb-5 leading-18">Запчасти для коммерческой техники и спецтехники</h1>
                <h3 class="w-[640px] mb-10 font-normal text-[16px]">Ваш транспорт — это инструмент, который должен работать, а не стоять в ремонте. 
        Мы помогаем механикам, автопаркам и сервисным центрам держать технику в строю, поставляя качественные запчасти для грузовиков, автобусов, спецтехники и прицепов — точно в срок и по лучшей цене.</h3>
                <button type="button" class="px-[48px] py-[12px] rounded-[6px] hover:bg-[#006598] bg-[#0075B1] transition duration-150 ease-in-out font-medium text-[18px]">Стать клиентом</button>
        </div>

        </div>
    </div>
    <div class="bg-[#E1E1E1] mb-[40px]">
        <div class="container">
            <div class="flex justify-between">
                <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Широкий ассортимент</p>
                    <span class="text-[12px] grey500">Запчасти для европейских, российских и китайских марок: от двигателя до подвески.</span>
                </div>

                <img src="{{ asset('storage/images/stick.png') }}" alt="палка">

                <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Проверенные поставщики</p>
                    <span class="text-[12px] grey500">Оригинал и надежные аналоги от ведущих брендов.</span>
                </div>

                <img src="{{ asset('storage/images/stick.png') }}" alt="палка">

                 <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Быстрая доставка по РФ</p>
                    <span class="text-[12px] grey500">Работаем с надежными ТК, отправляем в день заказа.</span>
                </div>

                <img src="{{ asset('storage/images/stick.png') }}" alt="палка">


                <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Помощь в подборе</p>
                    <span class="text-[12px] grey500">Наши специалисты помогут найти нужную деталь по VIN, артикулу или фото.</span>
                </div>

                <img src="{{ asset('storage/images/stick.png') }}" alt="палка">

                <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Оплата, как удобно</p>
                    <span class="text-[12px] grey500">Для юрлиц и ИП, безналичный расчет, отсрочка постоянным клиентам.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-10">

        <div class="text-[24px] font-medium container">Акции и скидки</div>

        <div class="container flex flex-row">
            <div>
                <div class="p-[30px] flex flex-col justify-between w-[630px]">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-col">
                            <span class="grey500 text-[14px] mb-2">Новинка 2025</span>
                            <h3 class="grey600 text-[24px] font-semibold">Мега скидка 30% на все фильтры</h3>
                        </div>
                        <div class="text-[96px] font-medium ibm blue">
                            -30%
                        </div>
                    </div>
                    <span class="blue flex flex-row items-center mt-35 mb-15 gap-2">Подробнее <img src="{{ asset('storage/images/arrow.png') }}" alt="палка"></span>
                </div>
            </div>

            <div>
                <div class="p-[30px] flex flex-col justify-between w-[240px]">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-col">
                            <span class="grey500 text-[14px] mb-2">Мега скидки</span>
                            <h3 class="grey600 text-[20px] font-semibold">Бесплатная доставка при заказе от 10 000 ₽</h3>
                        </div>
                    </div>
                    <img src="{{ asset('storage/images/gear.png') }}" alt="палка">
                    <span class="blue flex flex-row items-center mb-15 gap-2">Подробнее <img src="{{ asset('storage/images/arrow.png') }}" alt="палка"></span>
                </div>
            </div>

            <div>
                <div class="p-[30px] flex flex-col justify-between w-[433px] bg-[#0075B1] relative">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-col">
                            <span class="grey100 text-white text-[14px] font-light mb-2">Мега скидки</span>
                            <h3 class="text-white text-[20px] font-normal w-[163px]">Сезонное ТО со скидкой</h3>
                        </div>
                    </div>
                    <span class="flex flex-row items-center mt-10 gap-2 text-white">Подробнее <img src="{{ asset('storage/images/icon-white.png') }}" alt="палка"></span>
                    <img class="absolute top-21 right-11" src="{{ asset('storage/images/tire.png') }}" alt="палка">
                </div>

                <div class="p-[30px] flex flex-col justify-between w-[433px]">
                    <div class="flex flex-row justify-end items-start">
                        <div class="flex flex-col text-right">
                            <span class="grey500 text-[14px] font-light mb-2">Мега скидки</span>
                            <h3 class="grey600 text-[20px] font-medium w-[163px]">Второй товар — со скидкой 50%</h3>
                        </div>
                    </div>
                    <span class="flex flex-row items-center mt-6 gap-2 blue">Подробнее <img src="{{ asset('storage/images/arrow.png') }}" alt="палка"></span>
                </div>
            </div>
        </div>
    </div>

    <div>
    <div class="text-[24px] font-medium container flex flex-row items-center justify-between pb-15">
        Популярные товары 
        <span class="flex items-center gap-5">
            <button class="swiper-prev cursor-pointer hover:opacity-70 transition">
                <img src="{{ asset('storage/images/arrow2.png') }}" alt="назад">
            </button>
            
            <img src="{{ asset('storage/images/line.png') }}" alt="разделитель">
            
            <button class="swiper-next cursor-pointer hover:opacity-70 transition">
                <img class="scale-x-[-1]" src="{{ asset('storage/images/arrow2.png') }}" alt="вперед">
            </button>
        </span>
    </div>

        <style>
            .swiper {
            width: 100%;
            height: 100%;
            }

            .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            }

            .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            }
        </style>

        <div class="swiper mySwiper container">
            <div class="swiper-wrapper pb-10">
            <div class="swiper-slide"><x-card></x-card></div>
            <div class="swiper-slide"><x-card></x-card></div>
            <div class="swiper-slide"><x-card></x-card></div>
            <div class="swiper-slide"><x-card></x-card></div>
            <div class="swiper-slide"><x-card></x-card></div>
            <div class="swiper-slide"><x-card></x-card></div>
            <div class="swiper-slide"><x-card></x-card></div>
            <div class="swiper-slide"><x-card></x-card></div>
            <div class="swiper-slide"><x-card></x-card></div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

        <script>
                var swiper = new Swiper(".mySwiper", {
                slidesPerView: 5,
                spaceBetween: 30,
                navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                });
        </script>
    </div>
    <div class="container flex flex-col items-center justify-center text-center" style="background-image: url('{{ asset('storage/images/tires.png') }}');">
        <div class="flex flex-col text-white ibm">
            <p class="text-[24px] font-medium">Работаете с техникой — работайте с профессионалами</p>
            <p class="text-[14px] font-normal w-172">Оставьте заявку или позвоните нам — наши специалисты быстро подберут запчасти под ваш транспорт.</p>
        </div>
    </div>
</body>
</html>
