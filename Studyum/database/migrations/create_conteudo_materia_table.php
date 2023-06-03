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
        Schema::create('conteudo_materia', function (Blueprint $table) {
            $table->id('id');
            $table->integer('idMateriaSerie')->index();
            $table->string('tituloConteudo');
            $table->mediumText('conteudo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_conteudo');
    }
};
