<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUseronlineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('table_useronline', function(Blueprint $table)
		{
			$table->timestamps();
			$table->string('username', 32)->default('');
			$table->string('ip', 40)->default('')->index('ip');
			$table->string('url')->default('')->index('file');
			$table->string('phpsessid', 50)->default('');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('table_useronline');
	}

}
