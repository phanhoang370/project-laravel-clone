<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Node extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NODES', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('AFFGROUP');
            $table->string('IP');
            $table->string('SNMPC');
            $table->string('SNMPT');
            $table->boolean('TYPE');
            $table->string('NAME');
            $table->string('EXPLANATION');
            $table->integer('SNMPV3');
            $table->string('DISPLAY');
            $table->boolean('EQUIPMENT');
            $table->string('SNMPPORT');
            $table->string('STMTPRETRY');
            $table->string('SYSTEMOPTION');
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
        Schema::dropIfExists('NODES');
    }
}
