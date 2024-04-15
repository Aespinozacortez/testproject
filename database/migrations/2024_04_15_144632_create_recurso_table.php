<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('contenido'); // Para contenido HTML
            $table->enum('visibilidad', ['publico', 'privado']);
            $table->foreignId('curso_id')->constrained('curso'); // Clave foránea para relacionar con la tabla 'curso'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurso');
    }
};