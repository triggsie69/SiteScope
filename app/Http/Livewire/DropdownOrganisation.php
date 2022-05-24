<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class DropdownOrganisation extends Component
{
    protected $listeners = [
        'activeOrganisationUpdated' => 'refreshAuthUser',
    ];

    public function render()
    {
        if(!Auth::check()) abort(403);
        return view('livewire.dropdown-organisation');
    }

    public function refreshAuthUser(User $user)
    {
        if(!Auth::check()) abort(403);
        Auth::setUser($user);
        $this->emit('authupdated');
    }
}
