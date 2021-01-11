<?php

namespace Database\Seeders;

use App\Models\Cuidades;
use App\Models\Municipio;
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
        \App\Models\User::factory(10)->create();
        Municipio::factory(5)->create();
        Cuidades::factory(5)->create();
    }
}
