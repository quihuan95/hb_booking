<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title');
			$table->string('title_seo', 355)->nullable();
			$table->string('desc_seo', 355)->nullable();
			$table->string('keyword_seo', 355)->nullable();
			$table->string('slug')->nullable();
			$table->text('contents')->nullable();
			$table->timestamps();
			$table->integer('status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pages');
	}

}
