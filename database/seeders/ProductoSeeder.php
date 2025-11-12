<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::insert([
            [
                'nombre' => 'Sandwich',
                'precio' => 45,
                'imagen' => 'https://i.imgur.com/WBrxNTq.jpeg',
            ],
            [
                'nombre' => 'Tacos',
                'precio' => 60,
                'imagen' => 'https://i.imgur.com/XnJZdn0.jpeg',
            ],
            [
                'nombre' => 'Huevos al gusto',
                'precio' => 70,
                'imagen' => 'https://i.imgur.com/paSIjl4.jpeg',
            ],
            [
                'nombre' => 'Molletes',
                'precio' => 50,
                'imagen' => 'https://i.imgur.com/fDTNCxa.jpeg',
            ],
            [
                'nombre' => 'Tostadas',
                'precio' => 60,
                'imagen' => 'https://i.imgur.com/JXkhaYh.jpeg',
            ],
        ]);
    }
}
