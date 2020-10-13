<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('cusid');
           
            $table->string('cFname');
            $table->string('cLname');
            $table->string('cEmail');
            $table->string('cTelNo');
            $table->string('cMobno');
            $table->string('cAddress');
            $table->string('cStreet');
            $table->string('cCity');

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
        Schema::dropIfExists('customers');
    }
}
