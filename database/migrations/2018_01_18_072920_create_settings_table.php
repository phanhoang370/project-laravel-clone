<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SETTINGS', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('USER_ID')->unsigned();
            $table->integer('ITEM_ID')->unsigned();
            $table->integer('ROW');
            $table->integer('COL');
            $table->integer('SIZEX');
            $table->integer('SIZEY');
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
        Schema::dropIfExists('SETTINGS');
    }
}
