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
        Schema::table('modelos', function (Blueprint $table) {
            $table->foreign(['marca_id'], 'fk_modelos_marcas1')->references(['id'])->on('marcas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('modelos', function (Blueprint $table) {
            $table->dropForeign('fk_modelos_marcas1');
        });
    }
};
