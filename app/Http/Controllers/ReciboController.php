<?php

namespace App\Http\Controllers;

use App\Models\Recibo;
use Illuminate\Http\Request;

class ReciboController extends Controller
{
    
    public function index()
    {
        
        $recibos = Recibo::with(['detalles.producto'])->orderBy('fecha', 'desc')->get();

        return view('admin.recibos.index', compact('recibos'));
    }

        public function create()
        {
            return view('admin.recibos.create');
        }
}
