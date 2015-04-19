<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helps', function (Blueprint $table)
        {
            $table->char('id', 36)->index();

            $table->string('slug');

            $table->string('question');

            $table->text('answer');

            $table->boolean('is_faq')->default(false);

            $table->char('created_by', 36)->index();
            $table->char('updated_by', 36)->index(); // Last update

            $table->timestamps();
            $table->softDeletes();

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
        Schema::drop('helps');
    }
}
