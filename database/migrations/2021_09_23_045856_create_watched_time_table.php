<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchedTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watched_time', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('channel_id');

            $table->float('minutes')->nullable(false);
            $table->datetime('date')->nullable(false);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable(false);
            $table->foreign('channel_id')->references('id')->on('channel')->onDelete('cascade')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('watched_time');
    }
}
