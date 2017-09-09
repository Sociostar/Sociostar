<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('desc');
            $table->integer('fp_id')->unsigned();
            $table->integer('case_id')->unsigned();
            $table->integer('itemcat_id')->unsigned();
            $table->integer('price');
            $table->integer('amount');
            $table->integer('published');
            $table->timestamps();

            $table->foreign('fp_id')->references('id')->on('users');
            $table->foreign('case_id')->references('id')->on('cases');
            $table->foreign('itemcat_id')->references('id')->on('item_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
