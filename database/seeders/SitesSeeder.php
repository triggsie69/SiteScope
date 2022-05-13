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
                'code' => 'BBY',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 1,
                'name' => 'Airds',
                'code' => 'ARD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 1,
                'name' => 'Heathcote',
                'code' => 'HCT',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 1,
                'name' => 'Blair Athol',
                'code' => 'BAL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 2,
                'name' => 'Bradbury',
                'code' => 'BBY',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 2,
                'name' => 'Smithfield',
                'code' => 'SFD',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 2,
                'name' => 'Parramatta',
                'code' => 'PMA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 2,
                'name' => 'Currans Hill',
                'code' => 'CHL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 3,
                'name' => 'Warwick Farm',
                'code' => 'WFM',
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
                'code' => 'ORA',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'organisation_id' => 3,
                'name' => 'Bonnyrigg',
                'code' => 'BRG',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
