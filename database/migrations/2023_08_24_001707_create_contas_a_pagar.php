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
        Schema::create('contas_a_pagar', function (Blueprint $table) {
            $table->id();
            $table->integer('sentido');
            $table->integer('id_benef');
            $table->text('desc');
            $table->string('referencia');
            $table->integer('tipo_pgto');
            $table->dateTime('vencimento');
            $table->longText('valor');
            $table->integer('status');
            $table->longText('valor_pgto');
            $table->dateTime('pgto_em');
            $table->integer('parcela');
            $table->integer('parcelas');
            $table->text('chave_pgto');
            $table->integer('meio_pgto');
            $table->text('link1');
            $table->text('link2');
            $table->text('obs');
            $table->integer('create_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas_a_pagar');
    }
};
