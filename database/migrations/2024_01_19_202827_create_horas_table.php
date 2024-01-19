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
        Schema::create('horas', function (Blueprint $table) {
            $table->id();
                $table ->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');
                
                $table->date('fecha'); // Nuevo campo fecha
                $table->time('hora_ingreso');
                $table->time('hora_salida');

                $table->float('horas')->nullable();
                $table->float('colacion')->nullable();
                $table->float('contrato')->nullable();
                $table->float('extra')->nullable();
                $table->integer('precio')->nullable();
                $table->integer('precio_extra')->nullable();
                

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
        Schema::dropIfExists('horas');
    }
};
