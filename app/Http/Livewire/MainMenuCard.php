<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MainMenuCard extends Component
{
    protected $listeners = [
        'authupdated' => 'refreshCard',
    ];

    public function render()
    {
        if(!Auth::check()) abort(403);
        return view('livewire.main-menu-card');
    }

    public function refreshCard()
    {
        // Nothing to do, will trigger render()
    }
}
