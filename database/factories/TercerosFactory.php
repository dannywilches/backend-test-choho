<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terceros>
 */
class TercerosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nit' => fake()->numberBetween(1000000, 9999999),
            'razon_social' => fake()->company(),
            'tipo' => Str::random(10),
            'activo' => Str::random(1)
        ];
    }
}
