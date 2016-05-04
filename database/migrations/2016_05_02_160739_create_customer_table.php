<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail',50);
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('address',50);
            $table->string('tel',11);
            $table->smallInteger('sex');
            $table->string('token');
            $table->date('birthday');
            $table->smallInteger('get_notification');
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
        Schema::drop('customers');
    }
}
