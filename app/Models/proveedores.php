<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedores extends Model
{
    use HasFactory;

    protected string $table = 'proveedores';

    protected array $fillable = [
        'nombre_prov',
        'contacto',
        'telefono',
        'email',
        'direccion'
    ];

    public function abastecimientos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(abastecimientos::class);
    }

}
