<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use App\Models\Terceros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PedidosController extends Controller
{
    public function getPedidos()
    {
        $pedidos = Pedidos::with(['getDetallePedidos', 'getTercero'])->get();
        return response()->json([
            'pedidos' => $pedidos,
        ], 200);
    }

    public function getPedidoById($id)
    {
        $pedido = Pedidos::with(['getDetallePedidos', 'getTercero'])->find($id);
        return response()->json([
            'pedido' => $pedido,
        ], 200);
    }

    public function registroPedido(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'fecha_pedido' => 'required',
            'prefijo' => 'required|min:2|max:10',
            'num_pedido' => 'required|min:2|max:15|unique:App\Models\Pedidos,num_pedido',
            'nit' => 'required|max:20',
            'razon_social' => 'required',
            'vendedor' => 'required|max:50',
            'departamento' => 'required|max:100',
            'ciudad' => 'required|max:100',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'errores' => $validate,
                'status' => 204,
            ], 201);
        }

        $nit = Terceros::where('nit', $request->nit)->first();

        if(!$nit){
            return response()->json([
                'errores' => 'El nit ingresado no se encuentra en el sistem',
                'status' => 204,
            ], 201);
        }

        $pedido = new Pedidos;
        /* return response()->json([
            'pedido' => $nit->razon_social,
            'status' => 204,
        ], 201); */

        $pedido->fecha_pedido = $request->fecha_pedido;
        $pedido->prefijo = $request->prefijo;
        $pedido->num_pedido = $request->num_pedido;
        $pedido->nit = $nit->id;
        $pedido->razon_social = $request->razon_social;
        $pedido->vendedor = $request->vendedor;
        $pedido->departamento = $request->departamento;
        $pedido->ciudad = $request->ciudad;

        $pedido->save();

        return response()->json([
            'pedido' => $pedido,
            'status' => 201,
        ], 201);
    }
}
