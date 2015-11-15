<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomenclatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomenclators', function (Blueprint $table) {
            $table->engine='InnoDB';

            $table->integer('id')->unsigned()->primary();
            //$table->string('numero');
            $table->string('cuenta');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('nomenclators');
    }
}
