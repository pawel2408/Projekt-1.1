<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MainLayout extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render()
    {
        return view('layouts.main-layout');
    }
}
