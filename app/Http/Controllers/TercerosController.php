<?php

namespace App\Http\Controllers;

use App\Models\Terceros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TercerosController extends Controller
{
    public function getTerceros()
    {
        $terceros = Terceros::get();
        return response()->json([
            'terceros' => $terceros,
        ], 200);
    }

    public function getTerceroById($id)
    {
        $tercero = Terceros::find($id);
        return response()->json([
            'tercero' => $tercero,
        ], 200);
    }

    public function registroTercero(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nit' => 'required|max:20|unique:App\Models\Terceros,nit',
            'razon_social' => 'required|min:2|max:50',
            'tipo' => 'required|max:20',
            'activo' => 'required|max:5',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'errores' => $request,
                'status' => 204,
            ], 201);
        }

        $tercero = new Terceros;

        $tercero->nit = $request->nit;
        $tercero->razon_social = $request->razon_social;
        $tercero->tipo = $request->tipo;
        $tercero->activo = $request->activo;

        $tercero->save();

        return response()->json([
            'tercero' => $tercero,
            'status' => 201,
        ], 201);
    }
}
