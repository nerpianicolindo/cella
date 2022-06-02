<?php

namespace Database\Factories;

use App\Models\Caso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Modelo>
 */
class ModeloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ID_CASO' => function () {
                $caso = DB::table('casos')->inRandomOrder()
                ->limit(1)
                ->get();
                return $caso[0]->id;
            },
            'nombre' => $this->faker->name(),
            'tipo' => rand(1,5),
        ];
    }
}
