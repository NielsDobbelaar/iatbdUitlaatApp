<?php

namespace Database\Seeders;

use db;
use Illuminate\Database\Seeder;

class DierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dier')->insert([
            'naam' => 'buck',
            'diersoort' => 'Hond',
            'startDatum' => date_create("2022-04-15"),
            'einddatum' => date_create("2022-04-19"),
            'uurtarief' => 15,
            'beschrijving' => 'Buck is een speelvolle dachshund van 2 jaar oud hij is volledig huisgetrained en houdt van spelen en knuffelen',
            'eigenaar' => 1
        ]);

        DB::table('dier')->insert([
            'naam' => 'Kevin',
            'diersoort' => 'Kat',
            'startDatum' => date_create("2022-05-05"),
            'eindDatum' => date_create("2022-05-09"),
            'uurtarief' => 25,
            'beschrijving' => 'Kevin is een kat van ongeveer 1 jaar oud hij is erg schuw en bang voor mensen. Verder is kevin heel goed opgevoed en is hij makkelijk om voor te zorgen',
            'foto' => 'https://www.rtlnieuws.nl/sites/default/files/content/images/eht/2020/93/1544448883_catheaderfoto.jpg?itok=6B0jr3Rj&width=1024&height=576&impolicy=semi_dynamic',
            'eigenaar' => 2
        ]);
    }
}
