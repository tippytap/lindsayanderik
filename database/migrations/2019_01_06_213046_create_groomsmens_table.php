<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroomsmensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groomsmens', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer("member")->unsigned();
            $table->boolean("bestman");
        });
        
        Schema::table('groomsmens', function (Blueprint $table) {
            $table->foreign("member")->references("id")->on("members");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groomsmens');
    }
}
