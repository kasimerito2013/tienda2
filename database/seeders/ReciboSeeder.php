<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Recibo;
use App\Models\Detalle_recibo;

class ReciboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recibo1 = Recibo::create([
            'users_id' => 1, // Asegúrate de que este ID de usuario exista
            'fecha' => now(),
            'total' => 1225.00,
            'metodo_pago' => 'Tarjeta de Crédito'
        ]);

        // Crear detalles para el recibo
        Detalle_recibo::create([
            'recibo_id' => $recibo1->id,
            'producto_id' => 1, // Asegúrate de que este ID de producto exista
            'cantidad' => 2,
            'precio_unitario' => 500.00
        ]); 

        $recibo2 = Recibo::create([
            'users_id' => 1,
            'fecha' => now()->subDay(), // Fecha de ayer
            'total' => 300.00,
            'metodo_pago' => 'Efectivo'
        ]);

        Detalle_recibo::create([
            'recibo_id' => $recibo2->id,
            'producto_id' => 5, // Monitor
            'cantidad' => 1,
            'precio_unitario' => 300.00
        ]);
    }
}
