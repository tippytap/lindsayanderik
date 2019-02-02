<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couples', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('bride')->unsigned();
            $table->integer('groom')->unsigned();
            $table->string('story');
            $table->integer('wedding')->unsigned();
        });

        Schema::table('couples', function (Blueprint $table) {
            $table->foreign("bride")->references("id")->on("users");
            $table->foreign("groom")->references("id")->on("users");
            $table->foreign("wedding")->references("id")->on("weddings");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('couples');
    }
}
