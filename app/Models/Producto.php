<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'categoria',
        'marca',
        'precio',
        'stock',
        'descripcion',
    ];

    public function inventarios()
    {
        return $this->hasMany(Inventario::class);
    }

    public function detalles()
    {
        return $this->hasMany(Detalle_recibo::class);
    }
}
