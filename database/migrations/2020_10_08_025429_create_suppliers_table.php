<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('supid');
           
            $table->string('sFname');
            $table->string('sLname');
            $table->string('sEmail');
            $table->string('sTelNo');
            $table->string('sMobno');
            $table->string('sAddress');
            $table->string('sStreet');
            $table->string('sCity');

            $table->string('sIndus1');
            $table->string('sIndus2');
            $table->string('sIndus3');


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
        Schema::dropIfExists('suppliers');
    }
}
