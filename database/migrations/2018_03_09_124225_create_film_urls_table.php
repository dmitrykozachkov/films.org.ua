<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_urls', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('film_id')->unsigned()->index();
            $table->integer('quality_id')->unsigned()->index();
            $table->string('url')->unique();

            $table->foreign('film_id')
                ->references('id')
                ->on('films')
                ->onDelete('cascade');

            $table->foreign('quality_id')
                ->references('id')
                ->on('film_quality')
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
        Schema::dropIfExists('film_urls');
    }
}
