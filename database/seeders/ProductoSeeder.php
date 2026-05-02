<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::create([
            'nombre' => 'Laptop',
            'categoria' => 'Computadoras',
            'marca' => 'Dell',
            'precio' => 1200,
            'stock' => 15,
            'descripcion' => 'Laptop Dell XPS'
        ]);

        Producto::create([
            'nombre' => 'Mouse',
            'categoria' => 'Accesorios',
            'marca' => 'Logitech',
            'precio' => 25,
            'stock' => 50,
            'descripcion' => 'Mouse inalámbrico'
        ]);
    }
}


    
