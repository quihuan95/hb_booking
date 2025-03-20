<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBravoBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bravo_bookings', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned();
			$table->string('code', 64)->nullable();
			$table->integer('vendor_id')->nullable();
			$table->integer('customer_id')->nullable();
			$table->integer('payment_id')->nullable();
			$table->string('gateway', 50)->nullable();
			$table->integer('object_id')->nullable();
			$table->string('object_model')->nullable();
			$table->dateTime('start_date')->nullable();
			$table->dateTime('end_date')->nullable();
			$table->decimal('total', 10)->nullable();
			$table->integer('total_guests')->nullable();
			$table->string('currency', 5)->nullable();
			$table->string('status', 30)->nullable();
			$table->decimal('deposit', 10)->nullable();
			$table->string('deposit_type', 30)->nullable();
			$table->decimal('commission', 10)->nullable();
			$table->string('commission_type', 150)->nullable();
			$table->string('email')->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('phone')->nullable();
			$table->string('address')->nullable();
			$table->string('address2')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('zip_code')->nullable();
			$table->string('country')->nullable();
			$table->text('customer_notes')->nullable();
			$table->integer('create_user')->nullable();
			$table->integer('update_user')->nullable();
			$table->softDeletes();
			$table->timestamps();
			$table->text('buyer_fees')->nullable();
			$table->decimal('total_before_fees', 10)->nullable();
			$table->boolean('paid_vendor')->nullable();
			$table->bigInteger('object_child_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bravo_bookings');
	}

}
