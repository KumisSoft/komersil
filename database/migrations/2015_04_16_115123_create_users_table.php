<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table)
        {
            $table->char('id', 36)->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('phone');
            $table->tinyInteger('gender')->default(0); // https://en.wikipedia.org/wiki/ISO/IEC_5218
            $table->string('password', 60);
            $table->string('avatar')->nullable();

            $table->string('facebook_id')->nullable();
            $table->string('twitter_id')->nullable();
            $table->string('github_id')->nullable();
            $table->string('google_id')->nullable();

            $table->rememberToken();
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
        Schema::drop('users');
    }
}
