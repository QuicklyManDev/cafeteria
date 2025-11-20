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
                'imagen' => 'img/sandwich.jpg',
            ],
            [
                'nombre' => 'Tacos',
                'precio' => 60,
                'imagen' => 'img/tacosBis.jpg',
            ],
            [
                'nombre' => 'Huevos al gusto',
                'precio' => 70,
                'imagen' => 'img/huevos.jpg',
            ],
            [
                'nombre' => 'Molletes',
                'precio' => 50,
                'imagen' => 'img/molletes.jpg',
            ],
            [
                'nombre' => 'Tostadas',
                'precio' => 60,
                'imagen' => 'img/tostadas.jpg',
            ],
        ]);
    }
}
