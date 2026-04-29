<?php

namespace App\Http\Controllers;

use App\Models\Abastecimientos;
use App\Models\proveedores;
use App\Models\Producto;
use Illuminate\Http\Request;

class AbastecimientosController extends Controller
{
    public function createAbastecimiento()
        {
            $proveedores = proveedores::all();
            $productos = Producto::all();
            return view('admin.abastecimientos.create', compact('proveedores', 'productos'));
        }

public function storeAbastecimiento(Request $request)
        {
            $validated = $request->validate([
                'producto_id' => 'required|exists:productos,id',
                'proveedor_id' => 'required|exists:proveedores,id',
                'cantidad' => 'required|integer|min:1',
                'precio_unitario' => 'required|numeric|min:0',
                'fecha_abastecimiento' => 'required|date',
            ]);

            Abastecimientos::create($validated);

            return redirect()->route('admin.abastecimientos')
                            ->with('success', 'Abastecimiento agregado correctamente.');
        }

}
