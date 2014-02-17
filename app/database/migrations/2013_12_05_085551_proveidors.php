<?php

use Illuminate\Database\Migrations\Migration;

class Proveidors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proveidors', function($table)
		{
			$table->increments('id');
			$table->string('nom', 128);
			$table->boolean('actiu');
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
		Schema::drop('proveidors');
	}

}