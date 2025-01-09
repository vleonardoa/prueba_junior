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
        Schema::table('equipos', function (Blueprint $table) {
            $table->foreign(['marca_id'], 'fk_equipos_marcas1')->references(['id'])->on('marcas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['modelo_id'], 'fk_equipos_modelos1')->references(['id'])->on('modelos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tipo_id'], 'fk_equipos_tipos1')->references(['id'])->on('tipos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('equipos', function (Blueprint $table) {
            $table->dropForeign('fk_equipos_marcas1');
            $table->dropForeign('fk_equipos_modelos1');
            $table->dropForeign('fk_equipos_tipos1');
        });
    }
};
