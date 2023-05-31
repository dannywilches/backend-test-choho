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
        Schema::create('sucursales', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nit')->unsigned();
            $table->foreign('nit')->references('id')->on('terceros');
            $table->string('telefono', 10);
            $table->string('direccion', 30);
            $table->string('departamento', 30);
            $table->string('ciudad', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sucursales');
    }
};
