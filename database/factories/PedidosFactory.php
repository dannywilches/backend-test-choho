<?php

namespace Database\Factories;

use App\Models\Terceros;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedidos>
 */
class PedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_pedido' => fake()->dateTime(),
            'prefijo' => Str::random(4),
            'num_pedido' => fake()->randomNumber(4),
            'nit' => Terceros::inRandomOrder()->first()->id,
            'razon_social' => fake()->company(),
            'vendedor' => fake()->name(),
            'departamento' => fake()->country(),
            'ciudad' => fake()->city()
        ];
    }
}
