<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    use HasFactory;

    protected $table = 'recibos'; // sin "string"

    protected $fillable = [
        'users_id',
        'fecha',
        'total',
        'metodo_pago'
    ];

    public function detalles()
    {
        return $this->hasMany(Detalle_recibo::class, 'recibo_id');
    }
}