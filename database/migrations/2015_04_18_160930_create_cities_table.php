<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table)
        {
            $table->char('id', 36)->primary();
            $table->char('province_id', 36)->index();
            $table->timestamps();

            $table->char('created_by', 36)->index();
            $table->char('updated_by', 36)->index(); // Last update

            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');

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
        Schema::drop('cities');
    }
}
