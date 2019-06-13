<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organisatie');
            $table->string('img');
            $table->timestamps();
        });

        Schema::create('event_sponser', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('event_id')->unsigned()->index();

            $table->foreign('event_id')
                ->references('id')
                ->on('events')
                ->onDelete('cascade');

            $table->integer('sponser_id')->unsigned()->index();
            $table->foreign('sponser_id')
                ->references('id')
                ->on('sponsers')
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
        Schema::drop('sponsers');
        Schema::drop('event_sponser');
    }
}
