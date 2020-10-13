<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinalQuotaionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_quotaions', function (Blueprint $table) {
            $table->increments('fQuoid'); 

            $table->unsignedInteger('fquo_inqID');

            $table->integer('margin');
 
            $table->foreign('fquo_inqID')->references('inquiryid')->on('inquiries')->onDelete('cascade');


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
        Schema::dropIfExists('final_quotaions');
    }
}
