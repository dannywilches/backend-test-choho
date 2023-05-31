<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terceros extends Model
{
    use HasFactory;
    protected $fillable = [
        'nit',
        'razon_social',
        'tipo',
        'activo',
        'created_at',
        'updated_at',
    ];

    public function getSucursales() {
        return $this->hasMany(Sucursales::class, 'nit', 'id');
    }
}
