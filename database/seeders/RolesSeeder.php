<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'superadmin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'orgadmin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'siteadmin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'storeperson',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'consumer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
