<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('q_a', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('hoi')->nullable();
			$table->text('traloi')->nullable();
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
		Schema::drop('q_a');
	}

}
