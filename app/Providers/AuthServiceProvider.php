<?php

namespace App\Providers;

use App\Models\Role;
use App\Models\User;
use App\Models\UsersRole;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('administration', function(User $user) {
            if ($user->superuser) return true;
            
            $usersrole = UsersRole::where('user_id', $user->id)->get();
            if ($usersrole->contains('role_id', Role::ORGADMIN)) return true;

            if (!empty($user->organisation_id) && !empty($user->site_id)) {
                $role = UsersRole::where('user_id', $user->id)
                    ->where('organisation_id', $user->organisation_id)
                    ->where('site_id', $user->site_id)
                    ->first()
                    ->role_id;
                if ($role === Role::SITEADMIN) return true;
            }

            /*
            if (!empty($user->organisation_id)) {
                $role = UsersRole::where('user_id', $user->id)
                    ->where('organisation_id', $user->organisation_id)
                    ->first()
                    ->role_id;
                if ($role === Role::ORGADMIN) {
                    return true;
                } elseif (!empty($user->site_id)) {
                    $role = UsersRole::where('user_id', $user->id)
                        ->where('organisation_id', $user->organisation_id)
                        ->where('site_id', $user->site_id)
                        ->first()
                        ->role_id;
                    if ($role === Role::SITEADMIN) return true;
                }
            }
            */
        });
    }
}
