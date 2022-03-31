<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'admin' => 'no'
        ]);
        DB::table('admin')->insert([
            'admin' => 'yes'
        ]);
    }
}
