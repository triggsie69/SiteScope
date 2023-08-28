<?php

namespace App\Http\Livewire\Admin;

use App\Models\Organisation;
use Livewire\Component;

class OrgList extends Component
{
    public $asc = true;
    public $desc = false;

    public function showHeaderMenu()
    {
        error_log("This works!!!");
    }

    public function render()
    {
        $orgs = Organisation::all();

        //dd($orgs);

        return view('livewire.admin.org-list', [
            'coll' => $orgs,
        ]);
    }
}
