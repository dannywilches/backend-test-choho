<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\TercerosController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::post('me', 'me');
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('jwt.verify')->group(function () {
    Route::prefix('pedidos')->group(function(){
        Route::controller(PedidosController::class)->group(function () {
            Route::get('all', 'getPedidos');
            Route::get('detail/{id}', 'getPedidoById');
            Route::post('new', 'registroPedido');
        });
    });

    Route::prefix('terceros')->group(function(){
        Route::controller(TercerosController::class)->group(function () {
            Route::get('all', 'getTerceros');
            Route::get('detail/{id}', 'getTerceroById');
            Route::post('new', 'registroTercero');
        });
    });
});
