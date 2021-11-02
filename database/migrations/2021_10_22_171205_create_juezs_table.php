<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJuezsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juezs', function (Blueprint $table) {
            $table->id();
            $table->string('identificacion',45);
            $table->unsignedBigInteger('persona_id')->unique();
            $table->foreign('persona_id')
                  ->references('id')
                  ->on('personas')
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
        Schema::dropIfExists('juezs');
    }
}
