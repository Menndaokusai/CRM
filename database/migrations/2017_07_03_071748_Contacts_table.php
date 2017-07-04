<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contacts',function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('privatephone',22);
            $table->string('homephone',22);
            $table->string('workphone',22);
            $table->text('home_address',22);
            $table->text('work_address',22);
            $table->string('asst_phone',22);
            $table->string('asst_name',22);
            $table->string('title',64);
            $table->string('sex',4);
            $table->text('source');
            $table->string('department');
            $table->string('job');
            $table->string('email');
            $table->string('company');
            $table->string('created_by');
            $table->string('modified_by');
            $table->timestamp('birth');
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
        Schema::drop('Contacts');
    }
}
