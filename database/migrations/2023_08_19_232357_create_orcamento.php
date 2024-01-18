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
        Schema::create('orcamento', function (Blueprint $table) {
            $table->id();
            $table->String(column:'desc')->comment('Descrição');
            $table->double(column:'valor')->comment('Valor total');
            $table->double(column:'desconto')->comment('Desconto');
            $table->double(column:'porcentagem')->comment('Porcentagem de ganho');
            $table->integer(column:'id_cliente')->comment('ID do Cliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orcamento');
    }
};
