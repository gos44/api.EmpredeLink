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
        Schema::create('emprendimientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_emprendimiento');
            $table->string('descripcion');
            $table->string('especificaciones');
            $table->string('categoria');
          
            $table->unsignedBigInteger('emprendedor_id')->nullable();
            $table->foreign('emprendedor_id')
            ->references('id')
            ->on('emprendedors')->onDelete('cascade');

            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprendimientos');
    }
};
