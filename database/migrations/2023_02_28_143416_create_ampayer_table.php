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
        Schema::create('ampayer', function (Blueprint $table) {
            $table->id('id_ampayer');
            $table->string('nombre')->nullable(false);
            $table->string('apellidos')->nullable(false);
            $table->date('fecha_nac')->nullable(false);
            $table->text('curp')->nullable(false);
            $table->integer('estado')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ampayer');
    }
};
