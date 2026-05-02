<?php

namespace Database\Seeders;

use App\Models\inventarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        inventarios::create(['producto_id' => 1, 'cantidad' => 10]);
        inventarios::create(['producto_id' => 2, 'cantidad' => 50]);
    }
}
