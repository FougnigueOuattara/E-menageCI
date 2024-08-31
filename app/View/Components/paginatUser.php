<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class paginatUser extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $userdata)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.paginat-user');
    }
}
