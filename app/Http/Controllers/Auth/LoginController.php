<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Redirección según rol
                if (Auth::user()->role === 'admin') {
                return redirect()->route('admin.inventario');
            }
            return redirect()->route('user.productos');
        }

        return back()->withErrors([
            'email' => 'Las credenciales no coinciden.',
        ]);
    }
}