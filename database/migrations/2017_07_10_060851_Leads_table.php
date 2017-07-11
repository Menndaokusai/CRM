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
            $table->string('Lead_Name');
            $table->string('Designation')->nullable();
            $table->string('Primary_Phone');
            $table->string('Mobile_Phone')->nullable();
            $table->text('Address')->nullable();
            $table->string('Company')->nullable();
            $table->string('Email')->nullable();
            $table->string('Manager');
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
