<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('product_name')->nullable();
            $table->string('product_seller')->nullable();
            $table->float('product_price')->nullable()->default(0);
            $table->integer('product_quantity')->nullable()->default(1);
            $table->string('product_image_one')->nullable();
            $table->string('product_image_two')->nullable();
            $table->string('product_image_three')->nullable();
            $table->string('product_image_four')->nullable();
            $table->string('product_desc')->nullable();
            $table->string('product_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organics');
    }
}
