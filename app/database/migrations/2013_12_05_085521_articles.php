<?php

use Illuminate\Database\Migrations\Migration;

class Articles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function($table)
		{
			$table->increments('id');
			$table->string('descripcio', 128);
			$table->string('nserie', 128);
			$table->integer('quantitat');
			$table->integer('idfactura');
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
		Schema::drop('articles');
	}

}