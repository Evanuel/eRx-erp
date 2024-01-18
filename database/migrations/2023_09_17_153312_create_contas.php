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
        Schema::create('contas', function (Blueprint $table) {
            $table->id();
            $table->integer('tipo')->default(0);
            $table->integer('gp_empresa')->default(0);
            $table->integer('id_benef')->default(0);
            $table->string('referencia')->default('0');
            $table->integer('origem')->default(0)->comment('Origem do custo');
            $table->text('descri')->default(0);
            $table->integer('finalidade_pgto')->default(0);
            $table->integer('forma_pgto')->default(0);
            $table->text('chave_pgto')->default(0);
            $table->bigInteger('valor')->default(0);
            $table->integer('way')->default(0);
            $table->date('vencimento')->default('2017-08-03');
            $table->integer('status')->default(0);
            $table->bigInteger('valor_pgto')->nullable();
            $table->date('pgto_em')->nullable();
            $table->text('obs')->nullable();
            $table->integer('parcela')->nullable()->default(1);
            $table->integer('parcelas')->nullable()->default(1);
            $table->text('link1')->nullable();
            $table->text('link2')->nullable();
            $table->integer('create_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contas');
    }
};
