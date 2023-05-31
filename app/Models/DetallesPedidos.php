<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallesPedidos extends Model
{
    use HasFactory;
    protected $fillable = [
        'prefijo',
        'num_pedido',
        'perfil',
        'familia',
        'grupo',
        'subgrupo',
        'id_producto',
        'descripcion',
        'subtotal',
        'iva',
        'total',
        'created_at',
        'updated_at',
    ];

    public function getPedido() {
        return $this->belongsTo(Pedidos::class, 'num_pedido', 'id');
    }
}
