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
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="IntellectAuto" />
    <link rel="manifest" href="/site.webmanifest" />

</head>
<body>
    <x-header>
    </x-header>
<div class="text-white h-[700px] flex items-center justify-center relative overflow-hidden">
    
    <div class="swiper3 bg-swiper1 absolute inset-0 z-0">
        <div class="swiper-wrapper">

            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('storage/images/bg-main.png') }}');">
            </div>
            
            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('storage/images/bg1.png') }}');">
            </div>
            
            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('storage/images/bg2.png') }}');">
            </div>

            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('storage/images/bg3.png') }}');">
            </div>

            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('storage/images/bg4.png') }}');">
            </div>
        </div>
    </div>
    
    <div class="absolute inset-0 bg-black/50 z-10"></div>


    <div class="container relative z-20">
        <div>
            <h1 class="ibm text-[72px] font-bold text-left text-white w-[822px] mb-5 leading-18">
                Запчасти для коммерческой техники и спецтехники
            </h1>
            <h3 class="w-[640px] mb-10 font-normal text-[16px]">
                Ваш транспорт — это инструмент, который должен работать, а не стоять в ремонте. 
                Мы помогаем механикам, автопаркам и сервисным центрам держать технику в строю, 
                поставляя качественные запчасти для грузовиков, автобусов, спецтехники и прицепов — 
                точно в срок и по лучшей цене.
            </h3>
            <button type="button" class="px-[48px] py-[12px] rounded-[6px] hover:bg-[#006598] bg-[#0075B1] transition duration-150 ease-in-out font-medium text-[18px]">
                Стать клиентом
            </button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    const swiper3 = new Swiper('.bg-swiper1', {
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        loop: true,
        speed: 1500,
        navigation: false,
        pagination: false,
    });
</script>

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

        <div class="container flex flex-row pt-5 justify-between">
            <div>
                <div class="p-[30px] flex flex-col justify-between w-[630px] bg-[#F1F1F1]">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-col">
                            <span class="grey500 text-[14px] mb-2">Новинка 2025</span>
                            <h3 class="grey600 text-[24px] font-semibold">Мега скидка 30% на все фильтры</h3>
                        </div>
                        <div class="text-[96px] font-medium ibm blue">
                            -30%
                        </div>
                    </div>
                   <span class="blue flex flex-row items-center mt-35 mb-15 gap-2 group cursor-pointer select-none">
                    <span class="transition-all duration-200 group-hover:font-semibold group-hover:text-blue-700 group-active:font-bold group-active:text-blue-800 group-active:scale-95">Подробнее</span>
                    <img src="{{ asset('storage/images/arrow.png') }}" alt="стрелка" 
                        class="transition-all duration-200 
                        group-hover:translate-x-2 group-hover:scale-110
                        group-active:translate-x-3 group-active:scale-90">
                    </span>
                </div>
            </div>

            <div>
                <div class="p-[30px] flex flex-col justify-between w-[240px] bg-[#F1F1F1]">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-col">
                            <span class="grey500 text-[14px] mb-2">Мега скидки</span>
                            <h3 class="grey600 text-[20px] font-semibold">Бесплатная доставка при заказе от 10 000 ₽</h3>
                        </div>
                    </div>
                    <img class="mb-4" src="{{ asset('storage/images/gear.png') }}" alt="палка">
                    <span class="blue flex flex-row items-center gap-2 group cursor-pointer select-none">
                    <span class="transition-all duration-200 group-hover:font-semibold group-hover:text-blue-700 group-active:font-bold group-active:text-blue-800 group-active:scale-95">Подробнее</span>
                    <img src="{{ asset('storage/images/arrow.png') }}" alt="стрелка" 
                        class="transition-all duration-200 
                        group-hover:translate-x-2 group-hover:scale-110
                        group-active:translate-x-3 group-active:scale-90">
                    </span>
                </div>
            </div>

            <div class="flex flex-col justify-between">
                <div class="p-[30px] flex flex-col justify-between w-[433px] bg-[#0075B1] relative">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-col">
                            <span class="grey100 text-white text-[14px] font-light mb-2">Мега скидки</span>
                            <h3 class="text-white text-[20px] font-normal w-[163px]">Сезонное ТО со скидкой</h3>
                        </div>
                    </div>
                   <span class="flex flex-row items-center mt-10 gap-2 text-white group cursor-pointer select-none">
   
    <span class="transition-all duration-200 
                 group-hover:font-semibold group-hover:text-black
                 group-active:font-bold group-active:text-black group-active:scale-95">
        Подробнее
    </span>
    <img src="{{ asset('storage/images/icon-white.png') }}" alt="стрелка" 
         class="transition-all duration-200 
                group-hover:translate-x-2 group-hover:scale-110
                group-active:translate-x-3 group-active:scale-90
                group-hover:brightness-0  /* Делает стрелку черной */
                group-active:brightness-0">
</span>
                    <img class="absolute top-21 right-11" src="{{ asset('storage/images/tire.png') }}" alt="палка">
                </div>

                <div class="p-[30px] flex flex-col justify-between w-[433px] bg-[#F1F1F1]">
                    <div class="flex flex-row justify-end items-start">
                        <div class="flex flex-col text-right">
                            <span class="grey500 text-[14px] font-light mb-2">Мега скидки</span>
                            <h3 class="grey600 text-[20px] font-medium w-[163px]">Второй товар — со скидкой 50%</h3>
                        </div>
                    </div>
                   <span class="blue flex flex-row items-center mt-6 gap-2 group cursor-pointer select-none">
                    <span class="transition-all duration-200 group-hover:font-semibold group-hover:text-blue-700 group-active:font-bold group-active:text-blue-800 group-active:scale-95">Подробнее</span>
                    <img src="{{ asset('storage/images/arrow.png') }}" alt="стрелка" 
                        class="transition-all duration-200 
                        group-hover:translate-x-2 group-hover:scale-110
                        group-active:translate-x-3 group-active:scale-90">
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-5 bg-[#F1F1F1] mb-10">
        <div class="text-[24px] font-medium container flex flex-row items-center justify-between pb-15">
            Популярные товары 
            <span class="flex items-center gap-5">
                <button class="swiper-prev cursor-pointer hover:opacity-70 transition ">
                    <img src="{{ asset('storage/images/arrow2.png') }}" alt="назад" class="hover:scale-115 active:scale-85">
                </button>
                
                <img src="{{ asset('storage/images/line.png') }}" alt="разделитель">
                
                <button class="swiper-next cursor-pointer hover:opacity-70 transition">
                    <img class=" hover:scale-115 hover:scale-x-[-1] active:scale-85 active:scale-x-[-1] scale-x-[-1]" src="{{ asset('storage/images/arrow2.png') }}" alt="вперед" >
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
    <div class="container flex flex-col items-center justify-center text-center bg-no-repeat py-6 px-20 mb-10" style="background-image: url('{{ asset('storage/images/tires.png') }}');">
        <div class="flex flex-col text-white ibm">
            <p class="text-[24px] font-medium pb-1">Работаете с техникой — работайте с профессионалами</p>
            <p class="text-[14px] font-normal w-172">Оставьте заявку или позвоните нам — наши специалисты быстро подберут запчасти под ваш транспорт.</p>
        </div>
        <div>
            <form action="#" method="POST" class="container mx-auto px-4 py-7">
                @csrf
                
                <div class="flex flex-col lg:flex-row gap-2 items-stretch lg:items-center">
                    
                    <div class="relative flex-1 min-w-[180px]">
                        <select name="service" 
                            class="w-full appearance-none bg-white border border-gray-300 text-gray-700 py-2.5 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent cursor-pointer">
                            <option value="" disabled selected>Услуги</option>
                            <option value="repair">Ремонт</option>
                            <option value="maintenance">Техническое обслуживание</option>
                            <option value="diagnostics">Диагностика</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                            <img class="scale-x-[-1]" src="{{ asset('storage/images/arrow3.png') }}" alt="вперед">
                        </div>
                    </div>

                    <div class="relative flex-1 min-w-[180px]">
                        <select name="brand" 
                            class="w-full appearance-none bg-white border border-gray-300 text-gray-700 py-2.5 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent cursor-pointer">
                            <option value="" disabled selected>Марка</option>
                            <option value="volvo">Volvo</option>
                            <option value="scania">Scania</option>
                            <option value="man">MAN</option>
                            <option value="mercedes">Mercedes</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                            <img class="scale-x-[-1]" src="{{ asset('storage/images/arrow3.png') }}" alt="вперед">
                        </div>
                    </div>

                    <div class="relative flex-1 min-w-[180px]">
                        <input type="date" 
                            name="date" 
                            class="w-full appearance-none bg-white border border-gray-300 text-gray-700 py-2.5 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Дата и время">
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                        </div>
                    </div>

                    <div class="relative flex-1 min-w-[180px]">
                        <select name="branch" 
                            class="w-full appearance-none bg-white border border-gray-300 text-gray-700 py-2.5 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent cursor-pointer">
                            <option value="" disabled selected>Филиал</option>
                            <option value="moscow">Москва</option>
                            <option value="spb">Санкт-Петербург</option>
                            <option value="kazan">Казань</option>
                            <option value="novosibirsk">Новосибирск</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                            <img class="scale-x-[-1]" src="{{ asset('storage/images/arrow3.png') }}" alt="вперед">
                        </div>
                    </div>

                    <div class="flex-1 min-w-[180px]">
                        <input type="email" 
                            name="email" 
                            placeholder="E-mail"
                            class="w-full bg-white border border-gray-300 text-gray-700 py-2.5 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                    </div>

                    <div class="flex-1 min-w-[150px]">
                        <input type="text" 
                            name="name" 
                            placeholder="Имя"
                            class="w-full bg-white border border-gray-300 text-gray-700 py-2.5 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                    </div>

                    <div>
                        <button type="submit" 
                            class="w-full lg:w-auto hover:bg-[#006598]  active:scale-95 cursor-pointer bg-[#0075B1] transition duration-150 ease-in-out text-white font-medium py-3 px-8 rounded-[6px] transition duration-150 ease-in-out whitespace-nowrap">
                            Отправить
                        </button>
                    </div>
                </div>

                @error('email')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </form>
        </div>
    </div>

        <div class="pt-5 mb-10">
            <div class="text-[24px] font-medium container flex flex-row items-center justify-between pb-15">
                Новости
            <span class="flex items-center gap-5">
                    <button class="swiper-prev cursor-pointer hover:opacity-70 transition">
                        <img src="{{ asset('storage/images/arrow2.png') }}" alt="назад" class=" hover:scale-115 active:scale-85">
                    </button>
                    
                    <img src="{{ asset('storage/images/line.png') }}" alt="разделитель">
                    
                    <button class="swiper-next cursor-pointer hover:opacity-70 transition">
                        <img class=" hover:scale-115 hover:scale-x-[-1] active:scale-85 active:scale-x-[-1] scale-x-[-1]" src="{{ asset('storage/images/arrow2.png') }}" alt="вперед">
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

            <div class="swiper mySwiper1 container">
                <div class="swiper-wrapper pb-10">
                    <div class="swiper-slide"><x-news-card></x-news-card></div>
                    <div class="swiper-slide"><x-news-card></x-news-card></div>
                    <div class="swiper-slide"><x-news-card></x-news-card></div>
                    <div class="swiper-slide"><x-news-card></x-news-card></div>
                    <div class="swiper-slide"><x-news-card></x-news-card></div>
                    <div class="swiper-slide"><x-news-card></x-news-card></div>
                    <div class="swiper-slide"><x-news-card></x-news-card></div>
                    <div class="swiper-slide"><x-news-card></x-news-card></div>
                </div>
            </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

        <script>
                var swiper = new Swiper(".mySwiper1", {
                slidesPerView: 4,
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

    <x-footer>
    </x-footer>

</body>
</html>
