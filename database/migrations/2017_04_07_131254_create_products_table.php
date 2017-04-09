<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('product_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('products_id')->unsigned();
            $table->string('name');
            $table->text('text');
            $table->string('image');
            $table->string('pdf');
            $table->string('email');
            $table->string('locale')->index();

            $table->unique(['products_id','locale']);
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_translations');
        Schema::drop('products');
    }
}
