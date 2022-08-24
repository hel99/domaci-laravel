<?php

namespace Database\Seeders;

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
        $oSeeder = new OsobaSeeder();
        $rSeeder = new RacunSeeder();
        $tSeeder = new TransakcijaSeeder();

        $oSeeder->run();
        $rSeeder->run();
        $tSeeder->run();
    }
}
