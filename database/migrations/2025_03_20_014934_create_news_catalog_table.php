<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsCatalogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news_catalog', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('parent_id')->nullable();
			$table->string('title', 355);
			$table->string('slug', 355);
			$table->string('desception', 555)->nullable();
			$table->string('rel', 155)->nullable();
			$table->integer('position')->nullable();
			$table->integer('status')->nullable();
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
		Schema::drop('news_catalog');
	}

}
