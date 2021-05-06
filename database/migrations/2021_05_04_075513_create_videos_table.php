<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('path');
            $table->boolean('isMovie');
            $table->date('releaseDate');
            $table->integer('views')->default(0);
            $table->string('duration');
            $table->integer('season')->default(0);
            $table->integer('episde')->default(0);
            $table->bigInteger('entity_id')->unsigned();
            $table->timestamps();

            $table->foreign('entity_id')->references('id')->on('entities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
