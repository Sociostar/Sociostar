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
            $table->integer('userId')->unsigned();
            $table->string('name');
            $table->text('noteFP');
            $table->text('desc')->nullable();
            $table->integer('price')->unsigned();
            $table->integer('amount')->unsigned();
            $table->dateTime('dueDate')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = fp upload, 1 = admin acc');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
