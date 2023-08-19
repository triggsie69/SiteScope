<?php

namespace App\View\Components\Svg;

use Illuminate\View\Component;

class ColumnSort extends Component
{
    public $asc = false;
    public $desc = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($asc,$desc)
    {
        $this->asc = $asc;
        $this->desc = $desc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.svg.column-sort');
    }
}
