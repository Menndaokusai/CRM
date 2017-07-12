<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FAQTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FAQ',function (Blueprint $table){
            $table->increments('id');
            $table->string('Status');
            $table->string('Type')->nullable();
//            $table->string('Product_Name')->nullable();
            $table->string('Question');
            $table->string('Answer');
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
        Schema::drop('FAQ');
    }
}
