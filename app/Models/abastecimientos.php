<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Database\Eloquent\Model;

class abastecimientos extends Model
{
    use HasFactory;

    protected string $table = 'abastecimientos';

    protected array $fillable = [
        'producto_id',
        'proveedor_id',
        'cantidad',
        'precio_unitario',
        'fecha_abastecimiento'
    ];

    public function producto(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(productos::class, 'producto_id');
    }

    public function proveedor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(proveedores::class, 'proveedor_id');
    }
}
