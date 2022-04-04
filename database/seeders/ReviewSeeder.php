<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'oppasser' => 1,
            'review' => 'Niels heeft heel goed op mijn hond gepast hij heeft een perfecte leefomgeving voor honden en veel kennis over het trainen en verzorgen van honden',
            'user' => 'jaap'
        ]);
        DB::table('reviews')->insert([
            'oppasser' => 1,
            'review' => 'Niels heeft heel goed op mijn hond gepast hij heeft een perfecte leefomgeving voor honden en veel kennis over het trainen en verzorgen van honden',
            'user' => 'jaap'
        ]);
    }
}

