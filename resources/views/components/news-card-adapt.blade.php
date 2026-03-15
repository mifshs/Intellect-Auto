    @props(['news_page'])


<div class="border border-[#0075B1] p-4 flex flex-row gap-4">
    <div class="aspect-square w-full max-w-50">
        <img  src="{{$news_page->path_img}}" alt="{{$news_page->title}}">
    </div>
    <div class="flex flex-col justify-between gap-2 sm:justify-center">
        <span class="text-[8px] sm:text-[20px] grey500 font-medium text-left ibm">{{$news_page->title}}</span>
        <span class="text-[12px] sm:text-[25px] grey600 font-medium text-left ibm leading-4 sm:leading-7">{{$news_page->description}}</span>
    </div>
</div>