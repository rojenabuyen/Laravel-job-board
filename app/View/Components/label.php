<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class label extends Component
{
    
    public function __construct(
        public ?string $for = '',
        public ?bool $required = false

    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.label');
    }
}
