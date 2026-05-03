<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_recibo extends Model
{
        use HasFactory;
    
        protected $table = 'detalle_recibos';
    
        protected $fillable = [
            'recibo_id',
            'producto_id',
            'cantidad',
            'precio_unitario'
        ];
    
        public function recibo(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo(Recibo::class, 'recibo_id');
        }
    
        public function producto(): \Illuminate\Database\Eloquent\Relations\BelongsTo
        {
            return $this->belongsTo(Producto::class, 'producto_id');
        }
}
