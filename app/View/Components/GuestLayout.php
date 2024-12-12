<?php

namespace App\View\Components;

use Illuminate\View\{Component};
use Illuminate\Contracts\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *  @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('layouts.guest');
    }
}
