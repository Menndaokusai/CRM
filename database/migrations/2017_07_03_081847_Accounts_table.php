<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Accounts',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('account_type')->nullable();
            $table->string('officephone');
            $table->string('alternatephone')->nullable();
            $table->text('address')->nullable();
            $table->string('ownership')->nullable();
            $table->string('email')->nullable();
            $table->string('manager');
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
        Schema::drop('Accounts');
    }
}
