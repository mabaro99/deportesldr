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
        Schema::create('competicion', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nombre');
            $table->date('fecha');
            $table->string('deporte');
            $table->integer('n_participantes');
            $table->string('participantes');
            $table->integer('id_reserva');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competicion');
    }
};