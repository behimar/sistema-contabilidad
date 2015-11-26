<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->engine='InnoDB';

            $table->increments('id');
            $table->integer('nomenclator_id')->unsigned();
            $table->enum('tipo',['debe','haber']);
            $table->float('monto');
            $table->integer('account_id')->unsigned();
            $table->timestamps();

            $table->foreign('nomenclator_id')
                    ->references('id')->on('nomenclators')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transactions');
    }
}

