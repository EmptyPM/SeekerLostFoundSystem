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
            $table->bigIncrements('id');
            $table->string('i_name');
            $table->text('i_description');
            $table->date('date');
            $table->string('status');
            $table->text('remark');
            $table->integer('category_id')->index()->unsigned();
            $table->integer('hotel_id')->index()->unsigned();
            $table->integer('location_id')->index()->unsigned();
            $table->integer('storage_id')->index()->unsigned();
            $table->integer('departemet_id')->index()->unsigned();
            $table->string('receivedby');
            $table->string('handoverby');
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
        Schema::dropIfExists('items');
    }
}
