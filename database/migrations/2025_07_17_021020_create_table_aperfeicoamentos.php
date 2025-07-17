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
        Schema::create('aperfeicoamentos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_aperfeicoamento');
            $table->string('nome_entidade_ap');
            $table->integer('carga_horaria_ap');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aperfeicoamentos');
    }
};
