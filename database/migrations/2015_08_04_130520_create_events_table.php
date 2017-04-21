<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date');
            $table->string('location');
            $table->string('title');
            $table->string('intro');
            $table->string('slug')->default('');
            $table->text('description');
            $table->string('image')->nullable();
            $table->integer('album_id')->unsigned();
            $table->string('fb_link');
            $table->boolean('expired')->default(0);
            $table->boolean('shown')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}
