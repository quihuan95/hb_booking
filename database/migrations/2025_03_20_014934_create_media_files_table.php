<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_files', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('file_name')->nullable();
			$table->string('file_path')->nullable();
			$table->string('file_size')->nullable();
			$table->string('file_type')->nullable();
			$table->string('file_extension')->nullable();
			$table->integer('create_user')->nullable();
			$table->integer('update_user')->nullable();
			$table->softDeletes();
			$table->integer('app_id')->nullable();
			$table->integer('app_user_id')->nullable();
			$table->integer('file_width')->nullable();
			$table->integer('file_height')->nullable();
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
		Schema::drop('media_files');
	}

}
