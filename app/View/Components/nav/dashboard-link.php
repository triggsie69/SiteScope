<?php

namespace App\View\Components\nav;

use Illuminate\View\Component;

class dashboard-link extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        dd('Here I am');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav.dashboard-link');
    }
}
