    @props(['news_page'])

 <div class=" bg-gray-100 rounded-[10px] pb-3">
    <img src="{{$news_page->path_img}}" alt="{{$news_page->title}}" class=" rounded-t-[10px]">
    <div class="flex flex-col grid-cols-3 gap-y-[7px] px-5 pt-[17px]">
        <p class="text-[18px] grey600 font-medium text-[17px] leading-6 text-left">{{$news_page->title}}</p>
        <p class="grey500 text-sm text-left">{{$news_page->description}}</p>
        <p class="grey500 text-sm text-left">{{$news_page->date}}</p>
    </div>
</div>
