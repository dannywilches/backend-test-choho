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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_pedido');
            $table->string('prefijo', 10);
            $table->bigInteger('num_pedido')->unique();
            $table->bigInteger('nit')->unsigned();
            $table->foreign('nit')->references('id')->on('terceros');
            $table->string('razon_social', 50);
            $table->string('vendedor', 50);
            $table->string('departamento', 100);
            $table->string('ciudad', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
