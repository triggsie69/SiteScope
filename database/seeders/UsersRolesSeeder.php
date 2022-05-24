<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_roles')->insert([
            [
                'user_id' => 2,
                'role_id' => Role::ORGADMIN,
                'organisation_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'role_id' => Role::ORGADMIN,
                'organisation_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'role_id' => Role::ORGADMIN,
                'organisation_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // SiteAdmin roles
        DB::table('users_roles')->insert([
            [
                'user_id' => 5,
                'role_id' => Role::SITEADMIN,
                'organisation_id' => 2,
                'site_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
