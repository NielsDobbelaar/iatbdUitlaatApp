<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use db;

class SoortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('soorten')->insert([
            'soort' => 'Hond'
        ]);
        DB::table('soorten')->insert([
            'soort' => 'Kat'
        ]);
        DB::table('soorten')->insert([
            'soort' => 'Vogel'
        ]);
        DB::table('soorten')->insert([
            'soort' => 'Overig'
        ]);
    }
}
