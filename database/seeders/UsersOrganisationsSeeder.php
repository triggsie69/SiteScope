<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersOrganisationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_organisations')->insert([
            [
                'user_id' => 1,
                'organisation_id' => 1,
            ],
            [
                'user_id' => 2,
                'organisation_id' => 2,
            ],
            [
                'user_id' => 3,
                'organisation_id' => 3,
            ],
            [
                'user_id' => 4,
                'organisation_id' => 4,
            ],
        ]);
    }
}
