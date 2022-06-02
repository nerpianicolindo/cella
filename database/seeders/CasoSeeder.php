<?php

namespace Database\Seeders;

use App\Models\Caso;
use App\Models\Modelo;
use App\Models\STL;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CasoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caso::factory(3)
            ->has(Modelo::factory(10)->has(STL::factory(15)))
            ->create();
    }
}
