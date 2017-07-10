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
            $table->string('MobilePhone');
            $table->string('HomePhone')->nullable();
            $table->string('OfficePhone')->nullable();
            $table->text('home_address')->nullable();
            $table->text('work_address')->nullable();
            $table->string('asst_phone')->nullable();
            $table->string('asst_name')->nullable();
            $table->string('sex')->nullable();
            $table->string('department')->nullable();
            $table->string('Designation')->nullable();
            $table->string('email')->nullable();
            $table->string('company')->nullable();
            $table->string('manager');
            $table->string('birth')->nullable();
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
