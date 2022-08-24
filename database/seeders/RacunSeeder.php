<?php

namespace Database\Seeders;

use App\Models\Racun;
use Illuminate\Database\Seeder;

class RacunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Racun::factory()->count(75)->create();
    }
}
