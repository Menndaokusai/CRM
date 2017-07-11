<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tickets',function (Blueprint $table){
            $table->increments('id');
            $table->string('Title');
            $table->string('Account_Name')->nullable();
            $table->string('Contact_Name')->nullable();
//            $table->string('Product_Name')->nullable();
            $table->string('Status');
            $table->string('Severity')->nullable();
            $table->string('Hours')->nullable();
            $table->string('Days')->nullable();
            $table->string('Category')->nullable();
            $table->string('Priority');
            $table->string('Description')->nullable();
            $table->string('Solution')->nullable();
            $table->string('Maneger');
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
        Schema::drop('Tickets');
    }
}
