<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->increments('quoid'); 

            $table->unsignedInteger('quo_tenID');
            $table->unsignedInteger('quo_supID');
            $table->unsignedInteger('quo_proID');

            $table->string('returnPolicy');
            $table->string('validPeriod');
            $table->string('respondDate');
            $table->string('qEndDate');
            $table->integer('noOfPro');
            $table->integer('unitprice');
            $table->integer('totalprice');
 
            $table->foreign('quo_supID')->references('supid')->on('suppliers')->onDelete('cascade');
            $table->foreign('quo_tenID')->references('tenderid')->on('tenders')->onDelete('cascade');
            $table->foreign('quo_proID')->references('proid')->on('products')->onDelete('cascade');
            
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
        Schema::dropIfExists('quotations');
    }
}
