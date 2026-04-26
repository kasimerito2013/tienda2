<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class productos extends Model
{
    use HasFactory, SoftDeletes;

    protected string $table = 'productos';

    protected array $fillable = [
        'nombre',
        'categoria',
        'marca',
        'precio',
        'stock',
        'descripcion',
    ];

    public function inventarios(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(inventarios::class);
    }

    public function detalles(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(detalle_recibos::class);
    }


}
