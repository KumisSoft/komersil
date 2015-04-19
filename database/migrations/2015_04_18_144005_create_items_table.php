<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table)
        {
            $table->char('id', 36)->primary();

            $table->string('itemid')->index();

            $table->string('name');
            $table->string('slug')->index();
            $table->char('category_id', 36)->index();

            $table->double('discount')->default(0);
            $table->double('price')->default(0);

            $table->mediumText('short_description')->nullable();
            $table->text('description')->nullable();

            $table->text('notes')->nullable(); // Only for admin

            $table->boolean('featured')->default(false);

            $table->char('created_by', 36)->index();
            $table->char('updated_by', 36)->index(); // Last update

            $table->double('views')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
        Schema::drop('items');
    }
}
