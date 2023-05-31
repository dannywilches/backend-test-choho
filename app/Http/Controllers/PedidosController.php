<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function getPedidos()
    {
        $pedidos = Pedidos::with('getDetallePedidos')->get();
        return response()->json([
            'pedidos' => $pedidos,
        ], 200);
    }

    public function getPedidoById($id)
    {
        $pedido = Pedidos::find($id);
        return response()->json([
            'pedido' => $pedido,
        ], 200);
    }
}
