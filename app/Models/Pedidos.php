<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_pedido',
        'prefijo',
        'num_pedido',
        'nit',
        'razon_social',
        'vendedor',
        'departamento',
        'ciudad',
        'created_at',
        'updated_at',
    ];

    public function getDetallePedidos() {
        return $this->hasMany(DetallesPedidos::class, 'num_pedido', 'id');
    }

    public function getTercero() {
        return $this->belongsTo(Terceros::class, 'nit', 'id');
    }

}
