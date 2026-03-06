    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

<div>
    <div>
        <img src="{{ asset('storage/images/cleaner.png') }}" alt="палка">
    </div>
    <div>
        <p class="grey600 text-[14px] text-left mt-2">Предохранитель Круглый 40A (36VDC)</p>
        <p class="grey400 text-[12px] text-left">пласт. (уп. по 50 шт)</p>
    </div>
    <div class="flex flex-row items-center gap-3 mb-3">
        <span class="grey600 text-16">908.00₽</span>
        <span class="line-through grey500 text-[12px]">15 000₽</span>
    </div>
    <div class="flex  ">
        <button type="button" class="px-[12px] py-[8px] rounded-[6px] hover:bg-[#006598] bg-[#0075B1] transition duration-150 ease-in-out font-medium text-[14px] text-white font-normal">Купить</button>
    </div>
</div>