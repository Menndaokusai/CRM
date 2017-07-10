<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Leads',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('Designation')->nullable();
            $table->string('PrimaryPhone');
            $table->string('MobilePhone')->nullable();
            $table->text('address')->nullable();
            $table->string('Company')->nullable();
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
        Schema::drop('Leads');
    }
}
