<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoBookingPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_booking_payments', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned();
			$table->integer('booking_id')->nullable();
			$table->string('payment_gateway', 50)->nullable();
			$table->decimal('amount', 10)->nullable();
			$table->string('currency', 10)->nullable();
			$table->decimal('converted_amount', 10)->nullable();
			$table->string('converted_currency', 10)->nullable();
			$table->decimal('exchange_rate', 10)->nullable();
			$table->string('status', 30)->nullable();
			$table->text('logs')->nullable();
			$table->integer('create_user')->nullable();
			$table->integer('update_user')->nullable();
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
		Schema::drop('bravo_booking_payments');
	}

}
