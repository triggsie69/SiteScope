<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Christopher Triggs',
                'email' => 'triggsie69@gmail.com',
                'password' => Hash::make('password'),
                'organisation_id' => null,
                'superuser' => true,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CEO 1',
                'email' => 'ceo1@nowhere.com',
                'password' => Hash::make('password'),
                'organisation_id' => null,
                'superuser' => null,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CEO 2',
                'email' => 'ceo2@nowhere.com',
                'password' => Hash::make('password'),
                'organisation_id' => null,
                'superuser' => null,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'CEO 3',
                'email' => 'ceo3@nowhere.com',
                'password' => Hash::make('password'),
                'organisation_id' => null,
                'superuser' => null,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SiteAdmin 1.1',
                'email' => 'siteadmin-1.1@nowhere.com',
                'password' => Hash::make('password'),
                'organisation_id' => null,
                'superuser' => null,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
