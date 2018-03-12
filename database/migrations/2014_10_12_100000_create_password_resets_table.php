<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PASSWORD_RESETS', function (Blueprint $table) {
            $table->string('EMAIL')->index();
            $table->string('TOKEN')->index();
            $table->timestamp('CREATED_AT')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('PASSWORD_RESETS');
    }
}
