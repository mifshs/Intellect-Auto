    @props(['news_page'])

<div class="bg-gray-100 rounded-[10px] h-[368px] pb-3 flex flex-col overflow-hidden">
    <div class="h-[176px] w-full overflow-hidden rounded-t-[10px] flex-shrink-0">
        <img 
            src="{{$news_page->path_img}}" 
            alt="{{$news_page->title}}" 
            class="h-full w-full object-cover"
            style="max-height: 176px;"
        >
    </div>
    <div class="flex flex-col gap-y-[7px] px-5 pt-[17px]">
        <p class="text-[18px] grey600 font-medium leading-6 text-left tracking-wide">{{$news_page->title}}</p>
        <p class="grey500 text-sm text-left ">{{$news_page->description}}</p>
        <p class="grey500 text-sm text-left">{{$news_page->date}}</p>
    </div>
</div>
