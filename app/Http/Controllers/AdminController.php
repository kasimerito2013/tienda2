<?php

namespace App\Http\Controllers;

Use App\Models\Inventario;
use App\Models\Producto;
use App\Models\Recibo;
use App\Models\Detalle_recibo;
use App\Models\Proveedor;
use App\Models\Abastecimiento;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // inventarios

    public function inventario()
    {
        $inventarios = Inventario::with('producto')->get();
        return view('admin.inventarios.index', compact('inventarios'));
    }
    //productos
    public function productos()
    {
        $productos = Producto::all();
        return view('admin.productos.index', compact('productos')); 
    }
    //recibos
    public function recibosConDetalles()
    {
        $recibos = Recibo::with('detalles.producto')->get();
        return view('admin.recibos.index', compact('recibos'));
    }
    //proveedores
    public function proveedores()
    {
        $proveedores = Proveedor::all();
        return view('admin.proveedores.index', compact('proveedores')); 
    }
    //abastecimientos
    public function abastecimientos()
    {
        $abastecimientos = Abastecimiento::with(['proveedor', 'producto'])->get();
        return view('admin.abastecimientos.index', compact('abastecimientos')); 
    }
}
