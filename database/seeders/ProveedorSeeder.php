<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        Proveedor::updateOrCreate ([
            'nombre_Prov' => 'Dell Tecnologías',
                'contacto' => 'Juan Pérez',
                'telefono' => '+505 8888-8888',
                'email' => 'ventas@dell.com',
                'direccion' => 'Zona Franca Industrial, Managua',
        ]);
       Proveedor::updateOrCreate(
            [
                'nombre_Prov' => 'Logitech Global',
                'contacto' => 'Soporte Técnico',
                'telefono' => '555-1234',
                'email' => 'info@logitech.com',
                'direccion' => '123 Tech Street, Silicon Valley',
            ]
        );
        Proveedor::updateOrCreate(
            [
                'nombre_Prov' => 'HP Inc.',
                'contacto' => 'María García',
                'telefono' => '555-5678',
                'email' => 'ventas@hp.com',
                'direccion' => '456 Gadget Avenue, Tech City',
            ]
        );
        Proveedor::updateOrCreate(
            [
                'nombre_Prov' => 'Apple Center',
                'contacto' => 'Steve Jobs',
                'telefono' => '555-9999',
                'email' => 'distribucion@apple.com',
                'direccion' => 'Cupertino, California',
            ]
        );

            Proveedor::updateOrCreate(
                [
                    'nombre_Prov' => 'Gadget World',
                    'contacto' => 'Carlos Rodríguez',
                    'telefono' => '555-4321',
                    'email' => 'info@gadgetworld.com',
                    'direccion' => '789 Innovation Drive, Tech Park',
                ]
            );
    }
}
