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
        return view('livewire.dropdown-organisation');
    }

    public function refreshAuthUser(User $user)
    {
        Auth::setUser($user);
    }
}
