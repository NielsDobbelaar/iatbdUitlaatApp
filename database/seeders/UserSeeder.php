<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use db;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Niels Dobbelaar',
            'email' => 'niels.dobbelaar@gmail.com',
            'password' => bcrypt('admin'),
            'blocked' => 'no',
            'admin' => 'yes',
            'hasPage' => 'yes'
        ]);

        DB::table('users')->insert([
            'name' => 'jaap',
            'email' => 'jaap@hsleiden.com',
            'password' => bcrypt('jaap'),
            'blocked' => 'no',
            'admin' => 'no',
            'hasPage' => 'no'
        ]);
    }
}
