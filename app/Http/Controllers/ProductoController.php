<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // paguina inicio
    public function index()
    {
        $productos = Producto::all();
        return view('public.productos.index', compact('productos'));
    }
    //detalle del producto
    public function show(int $id)
    {
        $producto = Producto::findOrFail($id);
        return view('public.productos.show', compact('producto'));  
    }        


}
