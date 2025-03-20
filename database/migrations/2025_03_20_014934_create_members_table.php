<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('members', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('position', 50)->nullable();
			$table->string('name', 250)->nullable();
			$table->string('department', 350)->nullable();
			$table->string('workplace', 350)->nullable();
			$table->string('city', 250)->nullable();
			$table->string('receiving_address', 250)->nullable();
			$table->string('address', 350)->nullable();
			$table->string('phone', 250)->nullable();
			$table->string('mobile', 150)->nullable();
			$table->string('fax', 150)->nullable();
			$table->string('email', 250)->nullable()->unique('email');
			$table->string('password', 250)->nullable();
			$table->string('remember_token', 350)->nullable();
			$table->boolean('is_member')->default(0);
			$table->string('membership_code', 350)->nullable();
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
		Schema::drop('members');
	}

}
