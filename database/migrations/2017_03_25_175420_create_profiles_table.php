<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('picture')->default('/profiles/profile.jpg');
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->text('about')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->integer('rank')->default(0);
            $table->integer('review')->default(0);

            $table->integer('user_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->increments('id');
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
        Schema::dropIfExists('profiles');
    }
}
