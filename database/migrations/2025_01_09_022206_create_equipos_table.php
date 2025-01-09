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
        Schema::create('equipos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_serie', 45);
            $table->string('imei');
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
            $table->unsignedInteger('modelo_id')->index('fk_equipos_modelos1_idx');
            $table->unsignedInteger('marca_id')->index('fk_equipos_marcas1_idx');
            $table->unsignedInteger('tipo_id')->index('fk_equipos_tipos1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
