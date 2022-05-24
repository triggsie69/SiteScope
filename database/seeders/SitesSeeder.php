<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([
            [
                'organisation_id' => 1,
                'name' => 'Bradbury',
                'code' => 'BR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 1,
                'name' => 'Airds',
                'code' => 'AR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 1,
                'name' => 'Heathcote',
                'code' => 'HC',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 1,
                'name' => 'Blair Athol',
                'code' => 'BA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 2,
                'name' => 'Bradbury',
                'code' => 'BR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 2,
                'name' => 'Smithfield',
                'code' => 'SF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 2,
                'name' => 'Parramatta',
                'code' => 'PM',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 2,
                'name' => 'Currans Hill',
                'code' => 'CH',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 3,
                'name' => 'Warwick Farm',
                'code' => 'WF',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 3,
                'name' => 'Smithfield',
                'code' => 'SFD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 3,
                'name' => 'Orange',
                'code' => 'OR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 3,
                'name' => 'Bonnyrigg',
                'code' => 'BR',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
