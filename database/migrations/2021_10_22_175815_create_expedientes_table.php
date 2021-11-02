<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->string('Caso',45);
            $table->unsignedBigInteger('juez_id');
            $table->unsignedBigInteger('abogado_id');
            $table->unsignedBigInteger('procurador_id');
            $table->unsignedBigInteger('demandado_id');
            $table->unsignedBigInteger('demandante_id');
            $table->foreign('juez_id')
                ->references('id')
                ->on('juezs')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->foreign('abogado_id')
                ->references('id')
                ->on('abogados')
                ->onDelete('cascade')
                ->onUpdate('cascade');    

            $table->foreign('procurador_id')
                ->references('id')
                ->on('procuradors')
                ->onDelete('cascade')
                ->onUpdate('cascade');  
            
            $table->foreign('demandado_id')
                ->references('id')
                ->on('demandados')
                ->onDelete('cascade')
                ->onUpdate('cascade');      
            
            $table->foreign('demandante_id')
                ->references('id')
                ->on('demandantes')
                ->onDelete('cascade')
                ->onUpdate('cascade'); 
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
        Schema::dropIfExists('expedientes');
    }
}
