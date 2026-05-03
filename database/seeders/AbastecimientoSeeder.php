<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
Use App\Models\Abastecimiento;

class AbastecimientoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('abastecimientos')->insert([
            // Abastecimiento de Laptops (ID 1) provisto por Dell (ID 1)
            [
                'producto_id' => 1,
                'proveedor_id' => 1,
                'cantidad' => 10,
                'precio_unitario' => 1000.00,
                'fecha_abastecimiento' => now(),
                'created_at' => now(), 'updated_at' => now(),
            ],
            // Abastecimiento de Mouse y Teclados provisto por Gadget World (ID 3)
            [
                'producto_id' => 2,
                'proveedor_id' => 3,
                'cantidad' => 50,
                'precio_unitario' => 15.00,
                'fecha_abastecimiento' => now()->subDays(2),
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'producto_id' => 4,
                'proveedor_id' => 3,
                'cantidad' => 20,
                'precio_unitario' => 70.00,
                'fecha_abastecimiento' => now()->subDays(2),
                'created_at' => now(), 'updated_at' => now(),
            ],
            // Abastecimiento de Smartphones (ID 8) y Tablets (ID 7) por Tech Supplies (ID 2)
            [
                'producto_id' => 8,
                'proveedor_id' => 2,
                'cantidad' => 12,
                'precio_unitario' => 750.00,
                'fecha_abastecimiento' => now()->subDays(1),
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'producto_id' => 7,
                'proveedor_id' => 2,
                'cantidad' => 8,
                'precio_unitario' => 650.00,
                'fecha_abastecimiento' => now()->subDays(1),
                'created_at' => now(), 'updated_at' => now(),
            ],
            // Abastecimiento de Audio (Audífonos ID 3 y Altavoces ID 10)
            [
                'producto_id' => 3,
                'proveedor_id' => 3,
                'cantidad' => 30,
                'precio_unitario' => 110.00,
                'fecha_abastecimiento' => now(),
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'producto_id' => 10,
                'proveedor_id' => 3,
                'cantidad' => 15,
                'precio_unitario' => 190.00,
                'fecha_abastecimiento' => now(),
                'created_at' => now(), 'updated_at' => now(),
            ],
        ]);
    }
}
