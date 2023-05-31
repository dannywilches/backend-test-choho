<?php

namespace Database\Factories;

use App\Models\Terceros;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sucursales>
 */
class SucursalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nit' => Terceros::inRandomOrder()->first()->id,
            'telefono' => fake()->randomNumber(9),
            'direccion' => fake()->address(),
            'departamento' => fake()->country(),
            'ciudad' => fake()->city()
        ];
    }
}
