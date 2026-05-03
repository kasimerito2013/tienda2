<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::updateOrCreate([
            'nombre' => 'Laptop',
            'categoria' => 'Computadoras',
            'marca' => 'Dell',
            'precio' => 1200,
            'stock' => 15,
            'descripcion' => 'Laptop Dell XPS'
        ]);

        Producto::updateOrCreate([
            'nombre' => 'Mouse',
            'categoria' => 'Accesorios',
            'marca' => 'Logitech',
            'precio' => 25,
            'stock' => 50,
            'descripcion' => 'Mouse inalámbrico'
        ]);

        Producto::updateOrCreate([
            'nombre' => 'Audifonos',
            'categoria' => 'Audio',
            'marca' => 'Sony',
            'precio' => 150,
            'stock' => 30,
            'descripcion' => 'Audifonos inalámbricos Sony'
        ]);

        Producto::create([
            'nombre' => 'Teclado',
            'categoria' => 'Accesorios',
            'marca' => 'Corsair',
            'precio' => 100,
            'stock' => 20,
            'descripcion' => 'Teclado mecánico Corsair'
        ]);

        Producto::create([
            'nombre' => 'Monitor',
            'categoria' => 'Monitores',
            'marca' => 'LG',
            'precio' => 300,
            'stock' => 10,
            'descripcion' => 'Monitor LG UltraWide'
        ]);

        Producto::create([
            'nombre' => 'Impresora',
            'categoria' => 'Periféricos',
            'marca' => 'HP',
            'precio' => 200,
            'stock' => 5,
            'descripcion' => 'Impresora HP LaserJet'
        ]);

        Producto::create([
            'nombre' => 'Tablet',
            'categoria' => 'Tablets',
            'marca' => 'Apple',
            'precio' => 800,
            'stock' => 8,
            'descripcion' => 'iPad Pro'
        ]);

        Producto::create([
            'nombre' => 'Smartphone',
            'categoria' => 'Teléfonos',
            'marca' => 'Samsung',
            'precio' => 900,
            'stock' => 12,
            'descripcion' => 'Samsung Galaxy S21'
        ]);

        Producto::create([
            'nombre' => 'Cámara',
            'categoria' => 'Cámaras',
            'marca' => 'Canon',
            'precio' => 500,
            'stock' => 7,
            'descripcion' => 'Cámara Canon EOS'
        ]);

        Producto::create([
            'nombre' => 'Altavoces',
            'categoria' => 'Audio',
            'marca' => 'Bose',
            'precio' => 250,
            'stock' => 15,
            'descripcion' => 'Altavoces Bose SoundLink'
        ]);

        Producto::create([
            'nombre' => 'Router',
            'categoria' => 'Redes',
            'marca' => 'TP-Link',
            'precio' => 80,
            'stock' => 25,
            'descripcion' => 'Router TP-Link Archer'
        ]);

    }
}


    
