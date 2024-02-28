<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShopFilter extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $categoriesNames)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shop-filter');
    }
}
