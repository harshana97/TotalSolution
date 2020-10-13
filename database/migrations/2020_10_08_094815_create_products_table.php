<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('proid');
           
            $table->unsignedInteger('pro_inqID');
            $table->unsignedInteger('pro_induID');

            $table->string('proName');
            $table->integer('qty');
          
            $table->foreign('pro_inqID')->references('inquiryid')->on('inquiries')->onDelete('cascade');
            $table->foreign('pro_induID')->references('indusid')->on('industries')->onDelete('cascade');

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
        Schema::dropIfExists('products');
    }
}
