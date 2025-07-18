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
        Schema::create('curriculo_oportunidade', function (Blueprint $table) {
            $table->unsignedBigInteger('curriculo_id');
            $table->unsignedBigInteger('oportunidade_id');
            $table->foreign('curriculo_id')->references('id')->on('curriculos');
            $table->foreign('oportunidade_id')->references('id')->on('oportunidades');
            $table->primary(['curriculo_id','oportunidade_id']);
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curriculo_oportunidade');
    }
};
