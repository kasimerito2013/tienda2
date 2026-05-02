<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abastecimiento extends Model
{
    use HasFactory;

    protected $table = 'abastecimientos'; // sin "string"

    protected $fillable = [
        'producto_id',
        'proveedor_id',
        'cantidad',
        'precio_unitario',
        'fecha_abastecimiento'
    ];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
}