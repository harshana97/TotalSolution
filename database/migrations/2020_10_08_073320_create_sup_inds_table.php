<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupIndsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_inds', function (Blueprint $table) {
            $table->increments('siID');
            $table->unsignedInteger('supID');
            $table->unsignedInteger('indusID');

            $table->foreign('supID')->references('supid')->on('suppliers')->onDelete('cascade');

            $table->foreign('indusID')->references('indusid')->on('industries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sup_inds');
    }
}
