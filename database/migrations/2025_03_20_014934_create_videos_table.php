<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 555)->nullable();
			$table->string('slug', 555)->nullable();
			$table->string('code', 655)->nullable();
			$table->string('img', 855)->nullable();
			$table->string('desc1', 1000)->nullable();
			$table->integer('orders')->nullable();
			$table->string('status', 2)->nullable();
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
		Schema::drop('videos');
	}

}
