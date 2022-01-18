<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('quantity')->default(1);
            $table->float('total-price');
            $table->unsignedBigInteger('user-id');
            $table->unsignedBigInteger('product-id');

            $table->foreign('user-id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');;

            $table->foreign('product-id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_users');
    }
}
