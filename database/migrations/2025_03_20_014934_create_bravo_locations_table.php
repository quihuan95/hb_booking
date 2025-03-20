<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_locations', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name')->nullable();
			$table->text('content')->nullable();
			$table->string('slug')->nullable();
			$table->integer('image_id')->nullable();
			$table->string('map_lat', 20)->nullable();
			$table->string('map_lng', 20)->nullable();
			$table->integer('map_zoom')->nullable();
			$table->string('status', 50)->nullable();
			$table->integer('_lft')->unsigned()->default(0);
			$table->integer('_rgt')->unsigned()->default(0);
			$table->integer('parent_id')->unsigned()->nullable();
			$table->integer('create_user')->nullable();
			$table->integer('update_user')->nullable();
			$table->softDeletes();
			$table->bigInteger('origin_id')->nullable();
			$table->string('lang', 10)->nullable();
			$table->boolean('is_featured')->nullable()->default(0);
			$table->timestamps();
			$table->integer('banner_image_id')->nullable();
			$table->text('trip_ideas')->nullable();
			$table->index(['_lft','_rgt','parent_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bravo_locations');
	}

}
