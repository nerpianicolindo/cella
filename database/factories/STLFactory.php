<?php

namespace Database\Factories;

use App\Models\Modelo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\STL>
 */
class STLFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ID_MODELO' => function (array $attributes) {
                $modelo = DB::table('modelos')->inRandomOrder()
                ->limit(1)
                ->get();
                return $modelo[0]->id;
            },
            'nombre' => $this->faker->name(),
            'color'  => $this->faker->hexColor(),
            'transparencia' => rand(1,100),
            'orden' => $this->faker->randomDigit()

        ];
    }
}
