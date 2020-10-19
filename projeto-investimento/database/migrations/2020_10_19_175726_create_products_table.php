<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateProductsTable.
 */
class CreateProductsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function (Blueprint $table) {
			$table->id();
			$table->unsignedInteger('instituition_id');
			$table->string('name', 45);
			$table->text('description');
			$table->text('index');
			$table->decimal('interest_rate');

			$table->timestampsTz();
			$table->softDeletes();

			$table->foreign('instituition_id')->references('id')->on('instituitions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}
}
