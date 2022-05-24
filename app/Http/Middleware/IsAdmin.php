<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Role;
use App\Models\UsersRole;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->superuser) return $next($request);
        if (!empty(auth()->user->organisation_id)) {
            $role = UsersRole::where('user_id', auth()->user->id)
                ->where('organisation_id', auth()->user->organisation_id)
                ->first()
                ->role_id;
            if ($role === Role::ORGADMIN) {
                return $next($request);
            } elseif (!empty(auth()->user->site_id)) {
                $role = UsersRole::where('user_id', auth()->user->id)
                    ->where('organisation_id', auth()->user->organisation_id)
                    ->where('site_id', auth()->user->site_id)
                    ->first()
                    ->role_id;
                if ($role === Role::SITEADMIN) return $next($request);
            }
        }
        //return $next($request);
        abort(403);
    }
}
