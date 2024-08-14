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
        Schema::create('usuario_emprededor', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emprendedors_id')->nullable();
            $table->foreign('emprendedors_id')
            ->references('id')
            ->on('emprendedors')->onDelete('cascade');
            $table->timestamps();

            $table->unsignedBigInteger('inversionistas_id')->nullable();
            $table->foreign('inversionistas_id')
            ->references('id')
            ->on('inversionistas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_emprededor');
    }
};
