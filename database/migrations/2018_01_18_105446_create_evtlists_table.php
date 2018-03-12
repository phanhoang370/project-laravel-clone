<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvtlistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evtlists', function (Blueprint $table) {
            $table->increments('ID');
            $table->integer('GID');
            $table->integer('NODEID');
            $table->string('NODEIP');
            $table->string('NODENAME');
            $table->dateTime('EVTSTART');
            $table->dateTime('EVTEND');
            $table->boolean('EVTOPEN');
            $table->integer('EVTGROUP');
            $table->string('EVTITEM');
            $table->boolean('NODESTAT');
            $table->string('EVTDESCR');
            $table->string('EVTCOMMENT');
            $table->integer('EVTID');
            $table->boolean('EVTIGNORE');
            $table->boolean('EVTNOTIFY');
            $table->boolean('CLSNOTIFY');
            $table->boolean('WCHK');
            $table->boolean('CURWEIGHT');
            $table->dateTime('CHKDATE');
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
        Schema::dropIfExists('evtlists');
    }
}
