<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class GeaccepteerdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('geaccepteerd')->insert([
            'geaccepteerd' => 'no'
        ]);
        DB::table('geaccepteerd')->insert([
            'geaccepteerd' => 'yes'
        ]);
    }
}
