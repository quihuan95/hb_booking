<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoHotelsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_hotels', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('title')->nullable();
			$table->string('slug');
			$table->text('content')->nullable();
			$table->integer('image_id')->nullable();
			$table->integer('banner_image_id')->nullable();
			$table->integer('location_id')->nullable();
			$table->string('address')->nullable();
			$table->string('map_lat', 20)->nullable();
			$table->string('map_lng', 20)->nullable();
			$table->integer('map_zoom')->nullable();
			$table->boolean('is_featured')->nullable();
			$table->string('gallery')->nullable();
			$table->string('video')->nullable();
			$table->text('policy')->nullable();
			$table->smallInteger('star_rate')->nullable();
			$table->decimal('price', 12)->nullable()->default(0.00);
			$table->string('check_in_time')->nullable();
			$table->string('check_out_time')->nullable();
			$table->smallInteger('allow_full_day')->nullable();
			$table->decimal('sale_price', 12)->nullable();
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
		Schema::drop('bravo_hotels');
	}

}
