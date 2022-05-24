<?php

namespace App\Actions\Fortify;

use App\Models\Role;
use App\Models\User;
use App\Models\UsersRole;
use App\Models\Organisation;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'organisation' => ['required', 'string', 'max:255', 'unique:organisations,name'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $organisation = Organisation::create([
            'name' => $input['organisation'],
        ]);

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'organisation_id' => $organisation->id,
        ]);

        $user->organisations()->attach($organisation->id);

        UsersRole::create([
            'user_id' => $user->id,
            'role_id' => Role::IS_ORGADMIN,
            'organisation_id' => $organisation->id,
        ]);

        return $user;
    }
}
