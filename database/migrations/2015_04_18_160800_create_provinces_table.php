<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table)
        {
            $table->char('id', 36)->primary();
            $table->char('country_id', 36)->index();

            $table->string('name');

            $table->char('created_by', 36)->index();
            $table->char('updated_by', 36)->index(); // Last update

            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('provinces');
    }
}
