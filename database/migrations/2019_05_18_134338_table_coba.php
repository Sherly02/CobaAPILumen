<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableCoba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coba', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('fistname');
            $table->string('lastname');
            $table->enum('gender',array('male','female'));
            $table->enum('status',array('Active','Pending','Banned','Loss'));
            $table->string('email');
            $table->string('city');
            $table->text('address');
            $table->string('phone');
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
        Schema::dropIfExists('coba');
    }
}
