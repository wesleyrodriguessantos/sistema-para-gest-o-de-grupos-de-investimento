<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateMovimentsTable.
 */
class CreateMovimentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moviments', function (Blueprint $table) {
			$table->increments('id');
			$table->unsignedBigInteger('user_id');
			$table->unsignedBigInteger('group_id');
			$table->unsignedBigInteger('product_id');
			$table->decimal('value');
			$table->integer('type');

			$table->timestampsTz();
			$table->softDeletes();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('group_id')->references('id')->on('groups');
			$table->foreign('product_id')->references('id')->on('products');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('moviments');
	}
}
