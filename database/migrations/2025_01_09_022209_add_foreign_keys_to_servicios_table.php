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
        Schema::table('servicios', function (Blueprint $table) {
            $table->foreign(['cliente_id'], 'fk_servicios_clientes')->references(['id'])->on('clientes')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['equipo_id'], 'fk_servicios_equipos1')->references(['id'])->on('equipos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['estado_id'], 'fk_servicios_estados1')->references(['id'])->on('estados')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['user_id'], 'fk_servicios_users1')->references(['id'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('servicios', function (Blueprint $table) {
            $table->dropForeign('fk_servicios_clientes');
            $table->dropForeign('fk_servicios_equipos1');
            $table->dropForeign('fk_servicios_estados1');
            $table->dropForeign('fk_servicios_users1');
        });
    }
};
