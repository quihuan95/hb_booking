<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoAttrsTranslationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_attrs_translations', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned();
			$table->bigInteger('origin_id')->nullable();
			$table->string('locale', 10)->nullable();
			$table->string('name')->nullable();
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
		Schema::drop('bravo_attrs_translations');
	}

}
