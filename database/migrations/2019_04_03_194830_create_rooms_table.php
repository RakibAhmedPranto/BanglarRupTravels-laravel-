<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('catagory_id')->unsigned();
            $table->integer('hotel_id')->unsigned();
            $table->string('title');
            $table->text('discription');
            $table->string('slug');
            $table->integer('numbers_room')->default(1);
            $table->integer('price');
            $table->integer('offer_price')->nullable();
            $table->tinyinteger('status')->default(0);
            $table->integer('admin_id');

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
        Schema::dropIfExists('rooms');
    }
}
