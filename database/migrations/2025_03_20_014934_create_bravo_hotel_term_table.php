<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoHotelTermTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_hotel_term', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('term_id')->nullable();
			$table->integer('target_id')->nullable();
			$table->bigInteger('create_user')->nullable();
			$table->bigInteger('update_user')->nullable();
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
		Schema::drop('bravo_hotel_term');
	}

}
