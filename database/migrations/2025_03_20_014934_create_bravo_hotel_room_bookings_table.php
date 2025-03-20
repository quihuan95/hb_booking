<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoHotelRoomBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_hotel_room_bookings', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned();
			$table->bigInteger('room_id')->nullable();
			$table->bigInteger('parent_id')->nullable();
			$table->bigInteger('booking_id')->nullable();
			$table->dateTime('start_date')->nullable();
			$table->dateTime('end_date')->nullable();
			$table->smallInteger('number')->nullable();
			$table->decimal('price', 12)->nullable();
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
		Schema::drop('bravo_hotel_room_bookings');
	}

}
