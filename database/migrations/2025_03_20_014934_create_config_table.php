<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('config', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 355);
			$table->string('keywords', 355);
			$table->string('description', 655);
			$table->string('face_app_id', 355);
			$table->string('author', 355);
			$table->string('publisher', 355);
			$table->string('page_id', 355);
			$table->string('email', 355);
			$table->string('phone_number', 355);
			$table->string('canonical', 355);
			$table->timestamps();
			$table->string('status', 2);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('config');
	}

}
