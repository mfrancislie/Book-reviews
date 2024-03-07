<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class StarRating extends Component
{
    /**
     * Create a new component instance.
     * readonly it means can't modify
     */
    public function __construct(
     //  public readonly int $rating  - for testing
     public readonly ?float $rating
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.star-rating');
    }
}
