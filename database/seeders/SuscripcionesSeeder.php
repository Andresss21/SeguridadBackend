<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SuscripcionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Factories::factory(3)->create();
    }
}
