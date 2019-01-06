<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBridesmaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bridesmaids', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer("member")->unsigned();
            $table->boolean("maidofhonor");
        });
        
        Schema::table('bridesmaids', function (Blueprint $table) {
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
        Schema::dropIfExists('bridesmaids');
    }
}
