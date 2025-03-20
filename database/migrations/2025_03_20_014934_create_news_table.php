<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('member_id');
			$table->integer('fk_cat');
			$table->string('title', 855);
			$table->string('slug', 855);
			$table->text('news_desc')->nullable();
			$table->text('news_content')->nullable();
			$table->string('picture')->nullable();
			$table->string('picdesc')->nullable();
			$table->integer('viewnum')->nullable();
			$table->string('meta_title')->nullable();
			$table->string('meta_desc')->nullable();
			$table->string('meta_keywords')->nullable();
			$table->string('source')->nullable();
			$table->integer('news_special')->nullable();
			$table->integer('news_featured')->nullable();
			$table->integer('order_sort')->nullable();
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
		Schema::drop('news');
	}

}
