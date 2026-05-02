<?php

namespace App\Http\Controllers;

use App\Models\Recibo;
use App\Models\Producto; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function productos()
    {
    $productos = Producto::all();
    return view('user.productos.index', compact('productos'));
    }

    //perfil del usuario
    public function perfil()
    {
        $usuario = Auth::user();
        return view('user.perfil.index', compact('usuario'));
    }

    public function pago()
    {
        return view('user.pago.index');
    }

    public function pagoStore(Request $request)
    {
        $request->validate([
        'metodo_pago' => 'required|string'
    ]);

        $recibo = Recibo::create([
            'users_id' => Auth::id(),
            'fecha' => now(),
            'total' => 100.00, // ejemplo
            'metodo_pago' => $request->metodo_pago
        ]);

        return redirect()->route('user.recibos')
        ->with('success', 'Pago realizado exitosamente');
    }

    //recibo
    public function recibos()
{
    $recibos = Recibo::where('users_id', Auth::id())->get();
    return view('user.recibos.index', compact('recibos'));
}
}
