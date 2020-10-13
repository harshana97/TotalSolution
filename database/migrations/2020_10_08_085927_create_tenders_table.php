<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
           
            $table->increments('tenderid');
           
            $table->unsignedInteger('tender_inqID');

            $table->string('publishDate');
            $table->string('endDate');
            $table->string('note');
            $table->string('Tstatus');

            $table->foreign('tender_inqID')->references('inquiryid')->on('inquiries')->onDelete('cascade');


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
        Schema::dropIfExists('tenders');
    }
}
