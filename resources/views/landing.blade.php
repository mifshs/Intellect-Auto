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
            <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

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
<div class="text-white flex items-center justify-center relative overflow-hidden lg:h-[700px] md:h-[450px] h-[210px]">
    
    <div class="swiper3 bg-swiper1 absolute inset-0 z-0">
        <div class="swiper-wrapper">

            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('images/bg-main.png') }}');">
            </div>
            
            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('images/bg1.png') }}');">
            </div>
            
            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('images/bg2.png') }}');">
            </div>

            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('images/bg3.png') }}');">
            </div>

            <div class="swiper-slide bg-no-repeat bg-cover bg-center absolute inset-0" 
                 style="background-image: url('{{ asset('images/bg4.png') }}');">
            </div>
        </div>
    </div>
    
    <div class="absolute inset-0 bg-black/50 z-10"></div>


    <div class="container relative z-20 px-4">
        <div>
            <h1 class="ibm sm:text-[24px] md:text-[65px] lg:text-[72px] font-bold text-left text-white hidden md:flex md:w-[822px] mb-5 md:leading-18 sm:w-auto">
                Запчасти для коммерческой техники и спецтехники
            </h1>
            <h1 class="ibm  font-bold text-left md:hidden text-white leading-5 mb-2">
                Запчасти <br> для коммерческой <br> техники и спецтехники
            </h1>
            <h3 class="md:w-[640px] md:mb-10 font-normal text-[16px] hidden md:flex">
                Ваш транспорт — это инструмент, который должен работать, а не стоять в ремонте. 
                Мы помогаем механикам, автопаркам и сервисным центрам держать технику в строю, 
                поставляя качественные запчасти для грузовиков, автобусов, спецтехники и прицепов — 
                точно в срок и по лучшей цене.
            </h3>
            <h3 class=" mb-10 font-normal text-[12px] md:hidden">
                Быстро, надежно, без простоев
            </h3>
            <button type="button" class="px-[8px] py-[10px] md:px-[48px] md:py-[12px] rounded-[6px] hover:bg-[#006598] bg-[#0075B1] transition duration-150 ease-in-out font-medium text-[8px] md:text-[18px]">
                Стать клиентом
            </button>
        </div>
    </div>
</div>

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

    <div class="bg-[#E1E1E1] mb-5 xl:mb-[40px] ">
        <div class="container">
            <div class="lg:hidden">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-left flex flex-col justify-center">
                            <p class="text-[12px] grey600">Широкий ассортимент</p>
                            <span class="text-[12px] grey500 w-[253px] text-left">Запчасти для европейских, российских и китайских марок: от двигателя до подвески.</span>
                        </div>
                        <div class="swiper-slide text-left flex flex-col justify-center">
                            <p class="text-[12px] grey600">Проверенные поставщики</p>
                            <span class="text-[12px] grey500 w-[253px] text-left">Оригинал и надежные аналоги от ведущих брендов.</span>
                        </div>
                        <div class="swiper-slide text-left flex flex-col justify-center">
                            <p class="text-[12px] grey600">Быстрая доставка по РФ</p>
                            <span class="text-[12px] grey500 w-[253px] text-left">Работаем с надежными ТК, отправляем в день заказа.</span>
                        </div>
                        <div class="swiper-slide text-left flex flex-col justify-center">
                            <p class="text-[12px] grey600">Помощь в подборе</p>
                            <span class="text-[12px] grey500 w-[253px] text-left">Наши специалисты помогут найти нужную деталь по VIN, артикулу или фото.</span>
                        </div>
                        <div class="swiper-slide text-left flex flex-col justify-center">
                            <p class="text-[12px] grey600">Оплата, как удобно</p>
                            <span class="text-[12px] grey500 w-[253px] text-left">Для юрлиц и ИП, безналичный расчет, отсрочка постоянным клиентам.</span>
                        </div>
                    </div>
                    <div class="swiper-next absolute right-2 top-1/2 -translate-y-1/2 z-10">
                        <img class=" hover:scale-115 hover:scale-x-[-1] active:scale-85 active:scale-x-[-1] scale-x-[-1] cursor-pointer" src="{{ asset('images/arrow2.png') }}" alt="вперед" >
                    </div>
                    <div class="swiper-prev absolute left-2 top-1/2 -translate-y-1/2 z-10">
                        <img src="{{ asset('images/arrow2.png') }}" alt="назад" class="hover:scale-115 active:scale-85 cursor-pointer">
                    </div>
                </div>
            </div>


            <script>
                var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                spaceBetween: 30,
                navigation: {
                    nextEl: ".swiper-next",
                    prevEl: ".swiper-prev",
                },
                
                });
            </script>
            <div class="flex justify-between px-4 hidden lg:flex">
                <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Широкий ассортимент</p>
                    <span class="text-[12px] grey500">Запчасти для европейских, российских и китайских марок: от двигателя до подвески.</span>
                </div>

                <img src="{{ asset('images/stick.png') }}" alt="палка">

                <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Проверенные поставщики</p>
                    <span class="text-[12px] grey500">Оригинал и надежные аналоги от ведущих брендов.</span>
                </div>

                <img src="{{ asset('images/stick.png') }}" alt="палка">

                 <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Быстрая доставка по РФ</p>
                    <span class="text-[12px] grey500">Работаем с надежными ТК, отправляем в день заказа.</span>
                </div>

                <img src="{{ asset('images/stick.png') }}" alt="палка">


                <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Помощь в подборе</p>
                    <span class="text-[12px] grey500">Наши специалисты помогут найти нужную деталь по VIN, артикулу или фото.</span>
                </div>

                <img src="{{ asset('images/stick.png') }}" alt="палка">

                <div class="text-left w-[179px] flex flex-col justify-center">
                    <p class="text-[14px] grey600">Оплата, как удобно</p>
                    <span class="text-[12px] grey500">Для юрлиц и ИП, безналичный расчет, отсрочка постоянным клиентам.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-10">

        <div class="text-[24px] font-medium container">Акции и скидки</div>

        <div class=" container flex flex-col xl:items-center xl:flex-row pt-5 justify-between gap-2 xl:gap-0">
            <div>
                <div class="hidden xl:flex p-[30px] flex-col justify-between max-w-[630px] w-auto bg-[#F1F1F1]">
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
                    <img src="{{ asset('images/arrow.png') }}" alt="стрелка" 
                        class="transition-all duration-200 
                        group-hover:translate-x-2 group-hover:scale-110
                        group-active:translate-x-3 group-active:scale-90">
                    </span>
                </div>
                
                <div class="pt-[18px] pb-[6px] px-[16px] xl:hidden flex flex-col bg-[#F1F1F1] justify-center w-auto">
                        <div class="flex flex-row items-center">
                            <div class="flex flex-col">
                                <span class="grey500 text-[12px]">Новинка 2025</span>
                                <h3 class="grey600 text-[14px] font-semibold">Мега скидка 30% на все фильтры</h3>
                            </div>
                        </div>
                    <span class="blue flex flex-row items-baseline justify-between group cursor-pointer select-none">
                        <div class="flex flex-row items-center justify-center gap-2">
                            <span class="text-[14px] transition-all duration-200 group-hover:font-semibold group-hover:text-blue-700 group-active:font-bold group-active:text-blue-800 group-active:scale-95">Подробнее</span>
                            <img src="{{ asset('images/arrow.png') }}" alt="стрелка" 
                                class="transition-all duration-200 
                                group-hover:translate-x-2 group-hover:scale-110
                                group-active:translate-x-3 group-active:scale-90">
                        </div>
                        <div class="text-[48px] font-normal ibm blue">
                            -30%
                        </div>
                    </span>
                </div>
            </div>

            <div>
                <div class="p-[30px] hidden xl:flex flex-col justify-between bg-[#F1F1F1] w-[240px]">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-col">
                            <span class="grey500 text-[14px] mb-2">Мега скидки</span>
                            <h3 class="grey600 text-[20px] font-semibold">Бесплатная доставка при заказе от 10 000 ₽</h3>
                        </div>
                    </div>
                    <img class="mb-4" src="{{ asset('images/gear.png') }}" alt="палка">
                    <span class="blue flex flex-row items-center gap-2 group cursor-pointer select-none">
                    <span class="transition-all duration-200 group-hover:font-semibold group-hover:text-blue-700 group-active:font-bold group-active:text-blue-800 group-active:scale-95">Подробнее</span>
                    <img src="{{ asset('images/arrow.png') }}" alt="стрелка" 
                        class="transition-all duration-200 
                        group-hover:translate-x-2 group-hover:scale-110
                        group-active:translate-x-3 group-active:scale-90">
                    </span>
                </div>

                <div class="py-[18px] px-[16px] xl:hidden flex flex-row justify-between w-auto bg-[#F1F1F1]">
                    <div class="flex flex-col justify-between">
                        <div class="flex flex-row items-center">
                            <div class="flex flex-col">
                                <span class="grey500 text-[12px]">Мега скидки</span>
                                <h3 class="grey600 text-[14px] font-semibold">Бесплатная доставка при заказе от 10 000 ₽</h3>
                            </div>
                        </div>
                        <span class="blue flex flex-row items-center gap-2 group cursor-pointer select-none">
                        <span class="text-[14px] transition-all duration-200 group-hover:font-semibold group-hover:text-blue-700 group-active:font-bold group-active:text-blue-800 group-active:scale-95">Подробнее</span>
                            <img src="{{ asset('images/arrow.png') }}" alt="стрелка" 
                                class="transition-all duration-200 
                                group-hover:translate-x-2 group-hover:scale-110
                                group-active:translate-x-3 group-active:scale-90">
                        </span>
                    </div>
                    <img class="h-[103px]" src="{{ asset('images/gear.png') }}" alt="палка">
                </div>
            </div>

            <div class="flex flex-col justify-between gap-2 xl:gap-5">
                <div class="py-[18px] px-[16px] xl:p-[30px] flex flex-col justify-center w-auto xl:w-[433px] bg-[#0075B1] relative">
                    <div class="flex flex-row items-center">
                        <div class="flex flex-col">
                            <span class="grey100 text-white text-[12px] xl:text-[14px] font-light xl:mb-2">Мега скидки</span>
                            <h3 class="text-white text-[14px] xl:text-[20px] font-normal w-[163px]">Сезонное ТО со скидкой</h3>
                        </div>
                    </div>
                   <span class="flex flex-row items-center mt-10 gap-2 text-white group cursor-pointer select-none">
   
                    <span class="transition-all duration-200 
                                group-hover:font-semibold group-hover:text-black
                                group-active:font-bold group-active:text-black group-active:scale-95">
                        Подробнее
                    </span>
                    <img src="{{ asset('images/icon-white.png') }}" alt="стрелка" 
                        class="transition-all duration-200 
                                group-hover:translate-x-2 group-hover:scale-110
                                group-active:translate-x-3 group-active:scale-90
                                group-hover:brightness-0  
                                group-active:brightness-0">
                    </span>
                    <img class="absolute top-10.5 right-1 w-40 xl:w-auto xl:top-21 xl:right-11" src="{{ asset('images/tire.png') }}" alt="палка">
                </div>

                <div class="py-[18px] px-[16px] xl:p-[30px] flex flex-col justify-center w-auto xl:w-[433px] bg-[#F1F1F1]">
                    <div class="flex flex-row justify-items-start xl:justify-end items-start">
                        <div class="flex flex-col text-left xl:text-right">
                            <span class="grey500 text-[12px] xl:text-[14px] font-light xl:mb-2">Мега скидки</span>
                            <h3 class="grey600 text-[14px] xl:text-[20px] font-medium xl:w-[163px]">Второй товар — со скидкой 50%</h3>
                        </div>
                    </div>
                   <span class="blue flex flex-row items-center mt-6 gap-2 group cursor-pointer select-none">
                    <span class="text-[14px] transition-all duration-200 group-hover:font-semibold group-hover:text-blue-700 group-active:font-bold group-active:text-blue-800 group-active:scale-95">Подробнее</span>
                    <img src="{{ asset('images/arrow.png') }}" alt="стрелка" 
                        class="transition-all duration-200 
                        group-hover:translate-x-2 group-hover:scale-110
                        group-active:translate-x-3 group-active:scale-90">
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="xl:pt-5 xl:bg-[#F1F1F1] mb-10">
        <div class="text-[24px] font-medium container flex flex-row items-center justify-between pb-5 xl:pb-15">
            Популярные товары 
            <span class=" hidden xl:flex items-center gap-5">
                <button class="swiper-prev cursor-pointer hover:opacity-70 transition ">
                    <img src="{{ asset('images/arrow2.png') }}" alt="назад" class="hover:scale-115 active:scale-85">
                </button>
                
                <img src="{{ asset('images/line.png') }}" alt="разделитель">
                
                <button class="swiper-next cursor-pointer hover:opacity-70 transition">
                    <img class=" hover:scale-115 hover:scale-x-[-1] active:scale-85 active:scale-x-[-1] scale-x-[-1]" src="{{ asset('images/arrow2.png') }}" alt="вперед" >
                </button>
            </span>
        </div>

        <style>
            .swiper {
            width: 100%;
            }

            .swiper-slide {
            font-size: 18px;
            display: flex;
            align-items: center;
            }

            .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            }
        </style>

        <div class="hidden xl:flex mySwiper8 container overflow-hidden">
            <div class="swiper-wrapper pb-10">
                @foreach($products as $product)
                <div class="swiper-slide"><x-card :product="$product"></x-card></div>
                <div class="swiper-slide"><x-card :product="$product"></x-card></div>
                <div class="swiper-slide"><x-card :product="$product"></x-card></div>
                <div class="swiper-slide"><x-card :product="$product"></x-card></div>
                <div class="swiper-slide"><x-card :product="$product"></x-card></div>
                <div class="swiper-slide"><x-card :product="$product"></x-card></div>
                <div class="swiper-slide"><x-card :product="$product"></x-card></div>
                <div class="swiper-slide"><x-card :product="$product"></x-card></div>
                <div class="swiper-slide"><x-card :product="$product"></x-card></div>
                @endforeach
            </div>
        </div>

         <div class="container flex-1 flex flex-col max-lg:m-auto xl:hidden">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                        @for ($i = 0; $i < 6; $i++)
                            <x-card :product="$product"></x-card>
                        @endfor
                    </div>
                    <div class="flex flex-row items-center justify-items-start gap-[12px] pt-5">
                        <div class="gap-3 flex items-center transition cursor-pointer">
                            <a href="/index" class="text-[14px] blue transition-all duration-200 group-hover:font-semibold group-hover:text-blue-700 group-active:font-bold group-active:text-blue-800 group-active:scale-95">Смотреть еще</a>
                                <img src="{{ asset('images/arrow.png') }}" alt="стрелка" 
                                class="transition-all duration-200 
                                group-hover:translate-x-2 group-hover:scale-110
                                group-active:translate-x-3 group-active:scale-90">
                        </div>
                    </div>
        </div>

        <script>
                var swiper = new Swiper(".mySwiper8", {
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
    <div class=" container flex flex-col items-center justify-center text-center bg-no-repeat py-6 px-20 mb-10" style="background-image: url('{{ asset('images/tires2.png') }}');">
        <div class="flex flex-col text-white ibm">
            <p class="text-[24px] font-medium pb-1 hidden lg:flex">Работаете с техникой — работайте с профессионалами</p>
            <p class="text-[18px] font-medium pb-1 flex lg:hidden">Подберем нужную <br> запчасть за 5 минут</p>
            <p class="text-[14px] font-normal w-172 hidden lg:flex">Оставьте заявку или позвоните нам — наши специалисты быстро подберут запчасти под ваш транспорт.</p>
        </div>
        <div>
            <form action="#" method="POST" class="container mx-auto px-4 py-7">
                @csrf
                
                <div class="flex flex-col lg:flex-row gap-4 lg:gap-2 items-stretch lg:items-center">
                    
                    <div class="relative flex-1 justify-center items-center min-w-[130px] w-[85vw] lg:w-auto">
                        <select name="service" 
                            class="w-full appearance-none bg-white border border-gray-300 text-gray-700 py-2.5 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent cursor-pointer">
                            <option value="" disabled selected>Услуги</option>
                            <option value="repair">Ремонт</option>
                            <option value="maintenance">Техническое обслуживание</option>
                            <option value="diagnostics">Диагностика</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                            <img class="scale-x-[-1]" src="{{ asset('images/arrow3.png') }}" alt="вперед">
                        </div>
                    </div>

                    <div class="relative flex-1 min-w-[130px]">
                        <select name="brand" 
                            class="w-full appearance-none bg-white border border-gray-300 text-gray-700 py-2.5 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent cursor-pointer">
                            <option value="" disabled selected>Марка</option>
                            <option value="volvo">Volvo</option>
                            <option value="scania">Scania</option>
                            <option value="man">MAN</option>
                            <option value="mercedes">Mercedes</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                            <img class="scale-x-[-1]" src="{{ asset('images/arrow3.png') }}" alt="вперед">
                        </div>
                    </div>

                    <div class="relative flex-1 min-w-[150px]">
                        <input type="date" 
                            name="date" 
                            class="w-full appearance-none bg-white border border-gray-300 text-gray-700 py-2.5 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Дата и время">
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                        </div>
                    </div>

                    <div class="relative flex-1 min-w-[150px]">
                        <select name="branch" 
                            class="w-full appearance-none bg-white border border-gray-300 text-gray-700 py-2.5 px-4 pr-8 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent cursor-pointer">
                            <option value="" disabled selected>Филиал</option>
                            <option value="moscow">Москва</option>
                            <option value="spb">Санкт-Петербург</option>
                            <option value="kazan">Казань</option>
                            <option value="novosibirsk">Новосибирск</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-700">
                            <img class="scale-x-[-1]" src="{{ asset('images/arrow3.png') }}" alt="вперед">
                        </div>
                    </div>

                    <div class="flex-1 min-w-[100px]">
                        <input type="email" 
                            name="email" 
                            placeholder="E-mail"
                            class="w-full bg-white border border-gray-300 text-gray-700 py-2.5 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                    </div>

                    <div class="flex-1 min-w-[100px]">
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
            <div class="text-[24px] font-medium container flex flex-row items-center justify-between pb-2 lg:pb-2">
                Новости
            <span class=" items-center gap-5 hidden lg:flex">
                    <button class="swiper-prev cursor-pointer hover:opacity-70 transition">
                        <img src="{{ asset('images/arrow2.png') }}" alt="назад" class=" hover:scale-115 active:scale-85">
                    </button>
                    
                    <img src="{{ asset('images/line.png') }}" alt="разделитель" class="h-5 lg:h-auto">
                    
                    <button class="swiper-next cursor-pointer hover:opacity-70 transition">
                        <img class=" hover:scale-115 hover:scale-x-[-1] active:scale-85 active:scale-x-[-1] scale-x-[-1]" src="{{ asset('images/arrow2.png') }}" alt="вперед">
                    </button>
            </span>
            <span class="flex items-center gap-5 lg:hidden">
                    <button class="swiper-prev5 cursor-pointer hover:opacity-70 transition">
                        <img src="{{ asset('images/arrow2.png') }}" alt="назад" class=" hover:scale-115 active:scale-85">
                    </button>
                    
                    <img src="{{ asset('images/line.png') }}" alt="разделитель" class="h-5 lg:h-auto">
                    
                    <button class="swiper-next5 cursor-pointer hover:opacity-70 transition">
                        <img class=" hover:scale-115 hover:scale-x-[-1] active:scale-85 active:scale-x-[-1] scale-x-[-1]" src="{{ asset('images/arrow2.png') }}" alt="вперед">
                    </button>
            </span>
            </div>

            <style>
                .swiper {
                width: 100%;
                }

                .swiper-slide {
                font-size: 18px;
                display: flex;
                align-items: center;
                }

                .swiper-slide img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
                }
            </style>
            <div class="hidden lg:flex">
                <div class="swiper mySwiper1 container">
                    <div class="swiper-wrapper pb-10">
                        @foreach($news_pages as $news_page)
                        <div class="swiper-slide"><x-news-card :news_page="$news_page"></x-news-card></div>
                        @endforeach
                        @foreach($news_pages as $news_page)
                        <div class="swiper-slide"><x-news-card :news_page="$news_page"></x-news-card></div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="lg:hidden">
                <div class="swiper7 mySwiper3 container overflow-hidden">
                    <div class="swiper-wrapper pb-10">
                        @foreach($news_pages as $news_page)
                        <div class="swiper-slide"><x-news-card-adapt :news_page="$news_page"></x-news-card></div>
                        @endforeach
                    </div>
                </div>
            </div>

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

                var swiper7 = new Swiper(".mySwiper3", {
                slidesPerView: 1,
                spaceBetween: 30,
                navigation: {
                nextEl: '.swiper-next5',
                prevEl: '.swiper-prev5',
                },

                });
        </script>
    </div>

    <x-footer>
    </x-footer>

</body>
</html>
