<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus_admin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('pid')->nullable();
			$table->string('name', 355)->nullable();
			$table->string('icon')->nullable();
			$table->integer('orders')->nullable();
			$table->string('folder', 355)->nullable();
			$table->string('status', 10)->nullable();
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
		Schema::drop('menus_admin');
	}

}
