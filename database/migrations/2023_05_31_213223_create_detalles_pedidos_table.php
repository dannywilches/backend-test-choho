<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalles_pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('prefijo', 10);
            $table->bigInteger('num_pedido')->unsigned();
            $table->foreign('num_pedido')->references('id')->on('pedidos');
            $table->string('perfil',10);
            $table->string('familia', 30);
            $table->string('grupo', 30);
            $table->string('subgrupo', 30);
            $table->bigInteger('id_producto');
            $table->string('descripcion', 100);
            $table->double('subtotal', 15, 2);
            $table->double('iva', 15, 2);
            $table->double('total', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_pedidos');
    }
};
