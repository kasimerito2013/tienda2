<?php

namespace App\Http\Controllers;

Use App\Models\inventarios;
use App\Models\productos;
use App\Models\recibos;
use App\Models\detalle_recibos;
use App\Models\proveedores;
use App\Models\abastecimientos;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // inventarios
    public function inventarios()
    {
        $inventarios = inventarios::with('producto')->get();
        return view('admin.inventarios.index', compact('inventarios'));
    }
    //productos
    public function productos()
    {
        $productos = productos::all();
        return view('admin.productos.index', compact('productos')); 
    }
    //recibos
    public function recibos()
    {
        $recibos = recibos::with('usuario')->get();
        return view('admin.recibos.index', compact('recibos')); 
    }
    //detalle recibos
    public function detalle_recibos()
    {
        $detalle_recibos = detalle_recibos::with(['recibos', 'productos'])->get();
        return view('admin.detalle_recibos.index', compact('detalle_recibos'));     
    }
    //proveedores
    public function proveedores()
    {
        $proveedores = proveedores::all();
        return view('admin.proveedores.index', compact('proveedores')); 
    }
    //abastecimientos
    public function abastecimientos()
    {
        $abastecimientos = abastecimientos::with(['proveedores', 'productos'])->get();
        return view('admin.abastecimientos.index', compact('abastecimientos')); 
    }
}
