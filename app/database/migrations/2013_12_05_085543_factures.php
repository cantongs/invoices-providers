<?php

use Illuminate\Database\Migrations\Migration;

class Factures extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('factures', function($table)
		{
			$table->increments('id');
			$table->string('idfactura', 50);
			$table->integer('idproveidor');
			//$table->string('data', 10);
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
		Schema::drop('factures');
	}

}