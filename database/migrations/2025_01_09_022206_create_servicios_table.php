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
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('precio', 10);
            $table->dateTime('fecha_recepcion');
            $table->text('problema');
            $table->dateTime('fecha_diagnostico')->nullable();
            $table->text('diagnostico')->nullable();
            $table->dateTime('fecha_entrega')->nullable();
            $table->text('solucion')->nullable();
            $table->unsignedInteger('cliente_id')->index('fk_servicios_clientes_idx');
            $table->unsignedBigInteger('user_id')->index('fk_servicios_users1_idx');
            $table->unsignedInteger('equipo_id')->index('fk_servicios_equipos1_idx');
            $table->unsignedInteger('estado_id')->index('fk_servicios_estados1_idx');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicios');
    }
};
