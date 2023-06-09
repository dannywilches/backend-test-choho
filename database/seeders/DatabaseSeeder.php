<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Terceros::factory(10)->create();
        \App\Models\Sucursales::factory(10)->create();
        \App\Models\Pedidos::factory(10)->create();
        \App\Models\DetallesPedidos::factory(50)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Prueba',
            'email' => 'test@prueba.com',
            'password' => Hash::make('Test123'),
        ]);
    }
}
