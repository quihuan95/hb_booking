<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoHotelRoomListCalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_hotel_room_list_calendars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('hotel_id')->nullable();
			$table->string('code')->nullable();
			$table->string('title', 355)->nullable();
			$table->string('area')->nullable();
			$table->string('view')->nullable();
			$table->string('bed_type')->nullable();
			$table->string('bed_num')->nullable();
			$table->string('adults')->nullable();
			$table->string('children')->nullable();
			$table->string('user_id', 155)->nullable();
			$table->timestamps();
			$table->string('status', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bravo_hotel_room_list_calendars');
	}

}
