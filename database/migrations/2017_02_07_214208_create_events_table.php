<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->text('description');
            $table->string('image');
            $table->string('sponsers');
            $table->string('fb_link');

            $table->integer('expired');
            $table->integer('shown');

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
        Schema::drop('events');
    }
}
