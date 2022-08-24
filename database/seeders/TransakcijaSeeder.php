<?php

namespace Database\Seeders;

use App\Models\Transakcija;
use Illuminate\Database\Seeder;

class TransakcijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transakcija::factory()->count(100)->create();
    }
}
