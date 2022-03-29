<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BlockedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blocked')->insert([
            'blocked' => 'no'
        ]);
        DB::table('blocked')->insert([
            'blocked' => 'yes'
        ]);
    }
}
