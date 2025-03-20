<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('menus', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('parent_id')->nullable();
			$table->string('title')->nullable();
			$table->string('slug')->nullable();
			$table->string('redirect')->nullable();
			$table->integer('position');
			$table->integer('level');
			$table->text('desception')->nullable();
			$table->integer('rel')->nullable();
			$table->string('idvideo', 355)->nullable();
			$table->string('icon_url')->nullable();
			$table->string('title_seo', 455)->nullable();
			$table->string('desc_seo', 655)->nullable();
			$table->string('keyword_seo', 655)->nullable();
			$table->integer('status');
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
		Schema::drop('menus');
	}

}
