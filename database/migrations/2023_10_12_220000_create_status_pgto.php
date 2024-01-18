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
        Schema::create('status_pgto', function (Blueprint $table) {
            $table->id();
            $table->string('Descr')->default(" ");
            $table->integer('tipo')->default(0);
            $table->integer('gp')->default(0);
            $table->integer('create_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status_pgto');
    }
};
