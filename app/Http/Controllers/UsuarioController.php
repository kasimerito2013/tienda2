<?php

namespace App\Http\Controllers;

use App\Models\recibos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    //perfil del usuario
    public function perfil()
    {
        $usuario = Auth::user();
        return view('user.perfil', compact('usuario'));
    }

    public function pago(Request $request)
    {
        // Aquí iría la integración con Stripe o PayPal
        // Ejemplo: crear un recibo simulado
        $recibo = recibos::create([
            'user_id' => Auth::id(),
            'fecha' => now(),
            'total' => 100.00, // ejemplo
            'metodo_pago' => $request->input('metodo_pago'),
        ]);
        return view('user.pago', compact('recibo'));
    }
}
