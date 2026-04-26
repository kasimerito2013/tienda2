<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recibos extends Model
{
     use HasFactory;

    protected string $table = 'recibos';

    protected array $fillable = [
        'user_id',
        'fecha',
        'total',
        'metodo_pago'
    ];

    public function usuario(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detalles(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(detalle_recibos::class);
    }


}
