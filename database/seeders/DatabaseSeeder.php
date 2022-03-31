<?php

namespace Database\Seeders;

use App\Models\Aanvraag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GeaccepteerdSeeder::class,
            HaspageSeeder::class,
            AdminSeeder::class,
            OppasserSeeder::class,
            SoortSeeder::class,
            DierSeeder::class,
            BlockedSeeder::class,
            AanvragenSeeder::class,
            UserSeeder::class
        ]);
    }
}
