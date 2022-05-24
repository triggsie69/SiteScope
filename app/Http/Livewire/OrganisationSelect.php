<?php

namespace App\Http\Livewire;

use App\Models\Role;
use App\Models\Site;
use App\Models\User;
use App\Models\UsersRole;
use App\Models\Organisation;
use Illuminate\Support\Facades\DB;
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
        if(!Auth::check()) abort(403);
        
        $this->organisations = (Auth::user()->superuser)
            ? Organisation::orderBy('name')->get()
            : Auth::user()->organisations;
        $this->organisation_id = Auth::user()->organisation_id;
        if (!is_null(Auth::user()->organisation_id)) {
            $this->sites = Organisation::where('id', $this->organisation_id)->first()->sites;
            $this->site_id = Auth::user()->site_id;
        }
    }

    public function render()
    {
        if(!Auth::check()) abort(403);

        if (!$this->organisation_id == 0) {
            $role = 0;
            if (Auth::user()->superuser) {
                $this->sites = Site::where('organisation_id', $this->organisation_id)->orderBy('name')->get();
            } else {
                $role = UsersRole::where('user_id', Auth::id())
                    ->where('organisation_id', $this->organisation_id)
                    ->first()->role_id;

                if ($role === Role::ORGADMIN) {
                    $this->sites = DB::table('users_roles')
                        ->join('sites', 'users_roles.organisation_id', '=', 'sites.organisation_id')
                        ->where('users_roles.user_id', Auth::id())
                        ->where('users_roles.organisation_id', $this->organisation_id)
                        ->select('sites.id', 'sites.name')
                        ->orderBy('sites.name')
                        ->get();
                } else {
                    $this->sites = DB::table('users_roles')
                        ->join('sites', 'users_roles.site_id', '=', 'sites.id')
                        ->where('users_roles.user_id', Auth::id())
                        ->where('users_roles.organisation_id', $this->organisation_id)
                        ->select('sites.id', 'sites.name')
                        ->orderBy('sites.name')
                        ->get();
                }
            }
            if (!$this->sites->contains('id', $this->site_id)) $this->site_id = 0;
        } else {
            $this->sites = array();
            $this->site_id = 0;
        }
        return view('livewire.organisation-select');
    }

    public function update()
    {
        if(!Auth::check()) abort(403);

        $user = User::find(Auth::id());
        $user->organisation_id = ($this->organisation_id == 0) ? null : $this->organisation_id;
        $user->site_id = ($this->site_id == 0) ? null : $this->site_id;
        $user->update();
        $this->emit('activeOrganisationUpdated', $user);
        $this->closeModal();
    }
}
