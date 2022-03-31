<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HaspageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('haspage')->insert([
            'haspage' => 'no'
        ]);
        DB::table('haspage')->insert([
            'haspage' => 'yes'
        ]);
    }
}
