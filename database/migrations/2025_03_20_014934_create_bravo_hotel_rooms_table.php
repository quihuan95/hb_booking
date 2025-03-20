<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoHotelRoomsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_hotel_rooms', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title')->nullable();
			$table->text('content')->nullable();
			$table->integer('image_id')->nullable();
			$table->string('gallery')->nullable();
			$table->string('video')->nullable();
			$table->decimal('price', 12)->nullable();
			$table->bigInteger('parent_id')->nullable();
			$table->smallInteger('number')->nullable();
			$table->boolean('beds')->nullable();
			$table->string('bed_type', 250);
			$table->string('view', 300);
			$table->boolean('size')->nullable();
			$table->boolean('adults')->nullable();
			$table->boolean('children')->nullable();
			$table->string('status', 50)->nullable();
			$table->bigInteger('create_user')->nullable();
			$table->bigInteger('update_user')->nullable();
			$table->softDeletes();
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
		Schema::drop('bravo_hotel_rooms');
	}

}
