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
        Schema::create('oportunidades', function (Blueprint $table) {
            $table->id();
            $table->string('descricao_oportunidade');
            $table->string('titulo_oportunidade');
            $table->string('requisitos_oportunidade');
            $table->string('beneficio_oportunidade');
            $table->date('data_abertura_oportunidade');
            $table->date('data_fechamento_oportunidade');
            $table->double('salario_oportunidade');
            $table->integer('quantidade_oportunidade');
            $table->unsignedBigInteger('cidade_id');
            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->unsignedBigInteger('metodologia_id');
            $table->foreign('metodologia_id')->references('id')->on('metodologias');
            $table->unsignedBigInteger('competencia_id');
            $table->foreign('competencia_id')->references('id')->on('competencias');
            $table->unsignedBigInteger('area_id');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oportunidades');
    }
};
