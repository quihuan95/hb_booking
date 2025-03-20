<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoHotelRoomCalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_hotel_room_calendars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('target_id')->nullable();
			$table->string('fk_list_id')->nullable();
			$table->string('title', 355)->nullable();
			$table->text('content')->nullable();
			$table->string('fromDate')->nullable();
			$table->string('toDate')->nullable();
			$table->string('status', 11)->nullable();
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
		Schema::drop('bravo_hotel_room_calendars');
	}

}
