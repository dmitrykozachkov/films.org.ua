<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title');
            $table->string('slug')->unique();
            $table->string('img');
            $table->text('description');
            $table->integer('year_id')->unsigned()->index();
            $table->integer('duration')->unsigned();
            $table->integer('budget')->unsigned();
            $table->dateTime('premiere');
            $table->text('producer');
            $table->text('actors');
            $table->string('trailer')->unique();
            $table->integer('views')->unsigned();
            $table->boolean('published');

            $table->foreign('year_id')
                ->references('id')
                ->on('years')
                ->onDelete('cascade');

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
        Schema::dropIfExists('films');
    }
}
