<?php

namespace App\Http\Controllers;

use App\Models\Abastecimiento;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;


class AbastecimientosController extends Controller
{
    public function index()
    {
        $abastecimientos = Abastecimiento::with(['producto', 'proveedor'])->get();

        return view('admin.abastecimientos.index', compact('abastecimientos'));
    }

    public function create()
    {
        // Aquí puedes cargar productos y proveedores para el formulario
        $productos = \App\Models\Producto::all();
        $proveedores = \App\Models\Proveedor::all();

        return view('admin.abastecimientos.create', compact('productos', 'proveedores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'proveedor_id' => 'required|exists:proveedores,id',
            'cantidad' => 'required|numeric|min:1',
            'precio_unitario' => 'required|numeric|min:0',
            'fecha_abastecimiento' => 'required|date',
        ]);

        Abastecimiento::create($request->all());

        return redirect()->route('abastecimientos.index')->with('success', 'Abastecimiento registrado correctamente.');
    }
}