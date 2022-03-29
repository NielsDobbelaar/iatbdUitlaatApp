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
            'start-datum' => date_create("2022-04-15"),
            'eind-datum' => date_create("2022-04-19"),
            'uurtarief' => 15,
            'beschrijving' => 'Buck is een speelvolle dachshund van 2 jaar oud hij is volledig huisgetrained en houdt van spelen en knuffelen',
        ]);

        DB::table('dier')->insert([
            'naam' => 'Kevin',
            'diersoort' => 'Kat',
            'start-datum' => date_create("2022-05-05"),
            'eind-datum' => date_create("2022-05-09"),
            'uurtarief' => 25,
            'beschrijving' => 'Kevin is een kat van ongeveer 1 jaar oud hij is erg schuw en bang voor mensen. Verder is kevin heel goed opgevoed en is hij makkelijk om voor te zorgen',
            'foto' => 'https://www.rtlnieuws.nl/sites/default/files/content/images/eht/2020/93/1544448883_catheaderfoto.jpg?itok=6B0jr3Rj&width=1024&height=576&impolicy=semi_dynamic'
        ]);

        DB::table('dier')->insert([
            'naam' => 'Frans',
            'diersoort' => 'Vogel',
            'start-datum' => date_create("2022-04-01"),
            'eind-datum' => date_create("2022-05-04"),
            'uurtarief' => 10,
            'beschrijving' => 'frans is een leuke papegaai hij maakt weinig geluid maar kan wel op commando praten hij hoeft niet uitgelaten te worden hij kan in zijn kooi blijven en heeft alleen water en eten nodig',
            'foto' => 'https://www.rtlnieuws.nl/sites/default/files/content/images/eht/2020/93/1544448883_catheaderfoto.jpg?itok=6B0jr3Rj&width=1024&height=576&impolicy=semi_dynamic'
        ]);
    }
}
