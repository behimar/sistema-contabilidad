<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->engine='InnoDB';

            $table->increments('id');
            $table->date('fecha');
            $table->string('ciudad')->default('La Paz');
            $table->float('montoDebe')->nullable();
            $table->float('montoHaber')->nullable();
            $table->text('glosa');
            $table->integer('transaction_id')->unsigned();
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
        Schema::drop('accounts');
    }
}
