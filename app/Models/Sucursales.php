<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    use HasFactory;
    protected $fillable = [
        'nit',
        'telefono',
        'direccion',
        'departamento',
        'ciudad',
        'created_at',
        'updated_at',
    ];

    public function getTercero() {
        return $this->belongsTo(Terceros::class, 'nit', 'id');
    }
}
