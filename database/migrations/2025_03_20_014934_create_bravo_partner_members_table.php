<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoPartnerMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_partner_members', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('email')->unique('email');
			$table->string('fullname')->nullable();
			$table->string('phone', 50)->nullable();
			$table->string('password')->nullable();
			$table->string('password_show')->nullable();
			$table->string('token', 355)->nullable();
			$table->string('status', 1)->nullable();
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
		Schema::drop('bravo_partner_members');
	}

}
