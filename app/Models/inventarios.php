<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventarios extends Model
{
    use HasFactory;
    protected string $table = 'inventarios';
    protected array $fillable = [
        'producto_id',
        'cantidad_disponible',
        'cantidad_reservada',
        'cantidad_vendida',
        'ubicacion'
    ];
    public function producto(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(productos::class, 'producto_id');
    }
    
}
