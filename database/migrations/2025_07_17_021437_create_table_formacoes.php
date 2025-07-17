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
        Schema::create('formacoes', function (Blueprint $table) {
            $table->id();
            $table->string('nivel_formacao');
            $table->string('nome_curso');
            $table->string('nome_entidade');
            $table->string('modalidade');
            $table->string('situacao');
            $table->date('data_inicio_form');
            $table->date('data_fim_form');
            $table->string('obs_formacao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formacoes');
    }
};
