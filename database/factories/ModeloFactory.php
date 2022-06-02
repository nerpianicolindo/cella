<?php

namespace Database\Factories;

use App\Models\Caso;
use Illuminate\Database\Eloquent\Factories\Factory;
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
            'ID_MODELO' => Str::uuid(),
            'ID_CASO' => function (array $attributes) {
                return Caso::find($attributes['ID_CASO'])->ID_CASO;
            },
            'nombre' => $this->faker->name(),
            'tipo' => rand(1,5),
        ];
    }
}
