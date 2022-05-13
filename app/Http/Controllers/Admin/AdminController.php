<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request)
    {   
        //dd(Role::where('id', 1)->first()->users->contains(Auth::user()->id));
        return view('admin.dashboard');
    }
}
