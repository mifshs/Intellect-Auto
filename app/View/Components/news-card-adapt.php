<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class newsCardAdapt extends Component
{
    /**
     * Create a new component instance.
     */

    public $news_page;

    public function __construct($news_page)
    {
        $this->news_page = $news_page;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news-card-adapt');
    }
}
