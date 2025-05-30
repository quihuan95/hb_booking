<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoBookingMetaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_booking_meta', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned();
			$table->integer('booking_id')->nullable();
			$table->string('name')->nullable();
			$table->text('val')->nullable();
			$table->integer('create_user')->nullable();
			$table->integer('update_user')->nullable();
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
		Schema::drop('bravo_booking_meta');
	}

}
