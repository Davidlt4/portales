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
        Schema::create('remitentes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_portal');
            $table->string('aplicacion');
            $table->integer('id_usuario');
            $table->integer('id_delegacion');
            $table->string('servidor');
            $table->string('cuenta');
            $table->string('contraseña');
            $table->integer('puerto');
            $table->string('encriptacion');
            $table->boolean('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remitentes');
    }
};
