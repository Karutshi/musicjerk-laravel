<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('week');
            $table->boolean('mandatory');
            $table->string('title');
            $table->string('artist');
            $table->bigInteger('selected_by')->unsigned();
            $table->float('score');
            $table->string('url');
            $table->string('image_url')->nullable();
            $table->text('summary')->nullable();
            $table->string('spotify_id')->nullable();
            $table->json('genres')->nullable();
            $table->json('styles')->nullable();
            $table->timestamps();
        });

        Schema::table('albums', function (Blueprint $table) {
            $table->foreign('selected_by')->references('id')->on('users');
            $table->unique(array('title', 'artist'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
