<?php

namespace App\Http\Livewire\Admin;

use App\Models\Organisation;
use Livewire\Component;

class OrgList extends Component
{
    public function render()
    {
        $orgs = Organisation::all();
        $headers = array_keys($orgs->first()->getAttributes());

        //dd($headers);

        return view('livewire.admin.org-list', [
            'orgs' => $orgs,
            'headers' => $headers,
        ]);
    }
}
