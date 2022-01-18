<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubcategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subcategories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->text('description');
            $table->unsignedBigInteger('category-id');

            $table->foreign('category-id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');;
            });

            /*
            Organic: 
            1. meat and chicken
            2. nuts and honey
            3. vegetables and fruits
            4. dairy products.
            ***************************
            Plants:
            1. vegetables
            2. fruits
            3. herbs
            4. flower
            5. seeds
            ****************************
            Garden Supplies
            1. feed and compost
            2. plant container
            3. plant protection
            4. garden tools
            */
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subcategories');
    }
}
