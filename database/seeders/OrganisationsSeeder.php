<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrganisationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organisations')->insert([
            [
                'name' => 'Stores',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Organisation One',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Organisation Two',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Organisation Three',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
