<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@mail.com',
                'role' => 'admin',
                'status' => 1,
                'password' => bcrypt('qwerty12345'),
            ],
            [
                'name' => 'Contributor',
                'email' => 'contributor@mail.com',
                'role' => 'contributor',
                'status' => 1,
                'password' => bcrypt('qwerty12345'),
            ],
            [
                'name' => 'Buyer',
                'email' => 'buyer@mail.com',
                'role' => 'buyer',
                'status' => 1,
                'password' => bcrypt('qwerty12345'),
            ]
        ]);
    }
}
