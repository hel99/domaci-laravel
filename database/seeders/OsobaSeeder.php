<?php

namespace Database\Seeders;

use App\Models\Osoba;
use Illuminate\Database\Seeder;

class OsobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Osoba::factory()->count(40)->create();
    }
}
