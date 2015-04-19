<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table)
        {
            $table->char('id', 36)->primary();
            $table->char('parent_id', 36)->nullable()->index();

            $table->string('name');
            $table->string('slug')->index();

            $table->boolean('featured')->default(false);
            $table->boolean('mainmenu')->default(false);
            $table->integer('weight')->default(0);

            $table->text('description')->nullable();

            $table->text('notes')->nullable(); // Only for admin

//            $table->char('created_by', 36)->index();
//            $table->char('updated_by', 36)->index(); // Last update

            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');
    }
}
