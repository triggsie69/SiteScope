<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\User;
use App\Models\Organisation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use LivewireUI\Modal\ModalComponent;

class OrganisationSelect extends ModalComponent
{
    public $organisations = array();
    public $organisation_id;
    public $sites = array();
    public $site_id;

    public function mount()
    {
        $isSuper = Role::where('id', 1)->first()->users->contains(Auth::user()->id);
        $this->organisations = ($isSuper) ? Organisation::orderBy('name')->get() : Auth::user()->organisations;
        $this->organisation_id = Auth::user()->organisation_id;
        if (!is_null(Auth::user()->organisation_id)) {
            $this->sites = Organisation::where('id', $this->organisation_id)->first()->sites;
            $this->site_id = Auth::user()->site_id;
        }
    }

    public function render()
    {
        if (!$this->organisation_id == 0) {
            $this->sites = Organisation::where('id', $this->organisation_id)->first()->sites;
            if (!$this->sites->contains($this->site_id)) $this->site_id = 0;
        } else {
            $this->sites = array();
            $this->site_id = 0;
        }
        return view('livewire.organisation-select');
    }

    public function update()
    {
        $user = User::find(Auth::user()->id);
        $user->organisation_id = ($this->organisation_id == 0) ? null : $this->organisation_id;
        $user->site_id = ($this->site_id == 0) ? null : $this->site_id;
        $user->update();
        $this->emit('activeOrganisationUpdated', $user);
        $this->closeModal();
    }
}
