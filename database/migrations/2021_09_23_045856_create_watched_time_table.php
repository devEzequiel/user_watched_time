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
            $table->id()->nullable(false)->autoIncrement(true);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('channel_id')->nullable(false);

            $table->float('minutes')->nullable(false);
            $table->datetime('date')->nullable(false);

            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade')->nullable(false);
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
