<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banners', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('name')->nullable();
			$table->string('src')->nullable();
			$table->string('redirect')->nullable();
			$table->integer('orders')->nullable();
			$table->string('idvideo', 355)->nullable();
			$table->integer('type')->nullable();
			$table->smallInteger('status');
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
		Schema::drop('banners');
	}

}
