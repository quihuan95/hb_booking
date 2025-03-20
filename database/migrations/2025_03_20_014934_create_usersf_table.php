<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersfTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersf', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('fullname')->nullable();
			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('password')->nullable();
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
		Schema::drop('usersf');
	}

}
