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
        Schema::create('curriculos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_curriculo');
            $table->string('sexo_curriculo');
            $table->string('nacionalidade_curriculo');
            $table->string('cidade_atual_curriculo');
            $table->string('uf_atual_curriculo');
            $table->string('telefone_curriculo');
            $table->string('email_curriculo');
            $table->string('linkedin');
            $table->string('instagran');
            $table->string('site_curriculo');
            $table->date('atualizacao_curriculo');
            $table->string('comentario_rh');
            $table->double('nota_rh');
            $table->unsignedBigInteger('cidade_id');
            $table->unsignedBigInteger('metodologia_id');
            $table->unsignedBigInteger('competencia_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('experiencia_id');
            $table->unsignedBigInteger('aperfeicoamento_id');
            $table->unsignedBigInteger('formacao_id');
            $table->foreign('cidade_id')->references('id')->on('cidades');
            $table->foreign('metodologia_id')->references('id')->on('metodologias');
            $table->foreign('competencia_id')->references('id')->on('competencias');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('experiencia_id')->references('id')->on('experiencias');
            $table->foreign('aperfeicoamento_id')->references('id')->on('aperfeicoamentos');
            $table->foreign('formacao_id')->references('id')->on('formacoes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculos');
    }
};
