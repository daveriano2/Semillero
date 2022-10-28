<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('id_User')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();

          
            $table->foreignId('id_Ciudad')
            ->nullable()
            ->constrained('ciudads')
            ->cascadeOnUpdate()
            ->nullOnDelete();

           
            $table->foreignId('id_Sede')
            ->nullable()
            ->constrained('sedes')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            
            $table->foreignId('id_Horario')
            ->nullable()
            ->constrained('horarios')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->date('Fecha Inicio');
            $table->date('Fecha Final');
            $table->bigInteger('Celular');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
};
