<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('news_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('news_id')->unsigned();
            $table->string('title');
            $table->text('text');
            $table->string('image')->nullable();
            $table->string('locale')->index();

            $table->unique(['news_id','locale']);
            $table->foreign('news_id')->references('id')->on('news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('news_translations');
        Schema::drop('news');
    }
}
