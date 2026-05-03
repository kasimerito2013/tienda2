<?php

namespace Database\Seeders;

use App\Models\Inventario;
use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //laptop (ID 1)
        Inventario::updateOrCreate([
            'producto_id' => 1,
            'cantidad_disponible' => 15,
            'cantidad_reservada' => 2,
            'cantidad_vendida' => 5,
            'ubicacion' => 'Pasillo A - Estante 1',
        ]);

        // Mouse (ID 2)
        Inventario::updateOrCreate([
            'producto_id' => 2,
            'cantidad_disponible' => 5,
            'cantidad_reservada' => 0,
            'cantidad_vendida' => 10,
            'ubicacion' => 'Pasillo B - Cajón 4',
        ]);

        // laptop duplicada (ID 3)
        Inventario::updateOrCreate([
            'producto_id' => 3,
            'cantidad_disponible' => 15,
            'cantidad_reservada' => 1,
            'cantidad_vendida' => 2,
            'ubicacion' => 'Bodega Central',
        ]);
        
        // Mouse duplicado (ID 4)
        Inventario::updateOrCreate([
            'producto_id' => 4,
            'cantidad_disponible' => 20,
            'cantidad_reservada' => 5,
            'cantidad_vendida' => 2,
            'ubicacion' => 'Exhibición Frontal',
        ]);

        Inventario::updateOrCreate([
            'producto_id' => 5,
            'cantidad_disponible' => 10,
            'cantidad_reservada' => 0,
            'cantidad_vendida' => 5,
            'ubicacion' => 'Pasillo A - Estante 1',
        ]);

        Inventario::updateOrCreate([
            'producto_id' => 6,
            'cantidad_disponible' => 8,
            'cantidad_reservada' => 2,
            'cantidad_vendida' => 3,
            'ubicacion' => 'Pasillo B - Cajón 4',
        ]);

        Inventario::updateOrCreate([
            'producto_id' => 7,
            'cantidad_disponible' => 12,
            'cantidad_reservada' => 1,
            'cantidad_vendida' => 4,
            'ubicacion' => 'Bodega Central',
        ]);

            Inventario::updateOrCreate([
                'producto_id' => 8,
                'cantidad_disponible' => 5,
                'cantidad_reservada' => 0,
                'cantidad_vendida' => 2,
                'ubicacion' => 'Exhibición Frontal',
            ]);

        Inventario::updateOrCreate([
            'producto_id' => 9,
            'cantidad_disponible' => 20,
            'cantidad_reservada' => 3,
            'cantidad_vendida' => 7,
            'ubicacion' => 'Pasillo A - Estante 1',
        ]);

            Inventario::updateOrCreate([
                'producto_id' => 10,
                'cantidad_disponible' => 15,
                'cantidad_reservada' => 2,
                'cantidad_vendida' => 5,
                'ubicacion' => 'Pasillo B - Cajón 4',
            ]);

        Inventario::updateOrCreate([
            'producto_id' => 11,
            'cantidad_disponible' => 10,
            'cantidad_reservada' => 1,
            'cantidad_vendida' => 3,
            'ubicacion' => 'Bodega Central',
        ]);

        Inventario::updateOrCreate([
            'producto_id' => 12,
            'cantidad_disponible' => 8,
            'cantidad_reservada' => 0,
            'cantidad_vendida' => 4,
            'ubicacion' => 'Exhibición Frontal',
        ]);

        Inventario::updateOrCreate([
            'producto_id' => 13,
            'cantidad_disponible' => 25,
            'cantidad_reservada' => 5,
            'cantidad_vendida' => 10,
            'ubicacion' => 'Pasillo A - Estante 1',
        ]);
    }
}