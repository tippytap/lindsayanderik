<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInviteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitees', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer("wedding")->unsigned();
            $table->boolean("attending");
            $table->integer("guests");
            $table->string("firstname");
            $table->string("lastname");
        });

        Schema::table('invitees', function (Blueprint $table){
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
        Schema::dropIfExists('invitees');
    }
}
