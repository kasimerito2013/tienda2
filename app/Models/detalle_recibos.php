<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalle_recibos extends Model
{
        use HasFactory;
    
        protected string $table = 'detalle_recibos';
    
        protected array $fillable = [
            'recibo_id',
            'producto_id',
            'cantidad',
            'precio_unitario'
        ];
    
        public function recibo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo(recibos::class, 'recibo_id');
        }
    
        public function producto(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo(productos::class, 'producto_id');
        }
}
