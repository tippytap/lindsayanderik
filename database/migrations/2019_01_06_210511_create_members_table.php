<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("address");
            $table->string("phone");
            $table->string("blurb");
            $table->string("email");
            $table->string("picture");
            $table->integer("party")->unsigned();
        });

        Schema::table('members', function (Blueprint $table) {
            $table->foreign("party")->references("id")->on("parties");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
