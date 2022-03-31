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
            'naam' => 'Niels Dobbelaar',
            'email' => 'niels@gmail.com',
            'beschrijving' => 'Ik ben joost ik woon in een mooi vrijstaand huis en ik heb een grote liefde voor dieren ik zou daarom heel goed op uw dier kunnen passen.',
            'user' => 1
        ]);
    }
}
