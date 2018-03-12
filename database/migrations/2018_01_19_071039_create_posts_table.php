<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePostsTable.
 */
class CreatePostsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('POSTS', function(Blueprint $table) {
            $table->increments('ID');
            $table->string('NAME');
            $table->string('SLUG');
            $table->text('CONTENT');
            $table->string('IMAGE');

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
		Schema::drop('POSTS');
	}
}
