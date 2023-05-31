<?php

namespace Database\Factories;

use App\Models\Pedidos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetallesPedidos>
 */
class DetallesPedidosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prefijo' => Str::random(4),
            'num_pedido' => Pedidos::inRandomOrder()->first()->id,
            'perfil' => Str::random(9),
            'familia' => Str::random(9),
            'grupo' => Str::random(9),
            'subgrupo' => Str::random(9),
            'id_producto' => fake()->randomNumber(5),
            'descripcion' => Str::random(20),
            'subtotal' => fake()->randomNumber(6),
            'iva' => fake()->randomNumber(6),
            'total' => fake()->randomNumber(6)
        ];
    }
}
