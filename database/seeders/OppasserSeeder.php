<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class OppasserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oppasser')->insert([
            'naam' => 'Joost Bergen',
            'email' => 'Joost@gmail.com',
            'beschrijving' => 'Ik ben joost ik woon in een mooi vrijstaand huis en ik heb een grote liefde voor dieren ik zou daarom heel goed op uw dier kunnen passen.'
        ]);
        DB::table('oppasser')->insert([
            'naam' => 'Frans de Boer',
            'email' => 'FransdeBoer@gmail.com',
            'beschrijving' => 'Ik ben frans ik ben 42 jaar ik woon in een mooi ruim appartement met mij hond ik heb dus al ervaring met dieren en ik zou goed op uw hondje kunnen passen.'
        ]);

        DB::table('oppasser')->insert([
            'naam' => 'Chelsey fransen',
            'email' => 'Chelsey@gmail.com',
            'beschrijving' => 'Ik ben chelsey ik ben verliefd op katten ik woon in een mooi appartementje waar ik graag op uw kat zou passen'
        ]);

        DB::table('oppasser')->insert([
            'naam' => 'kevin dortu',
            'email' => 'kevin@gmail.com',
            'beschrijving' => 'Ik hou van alle dieren ik wil graag op jullie dieren passen in mijn studentkamerttje'
        ]);
    }
}
