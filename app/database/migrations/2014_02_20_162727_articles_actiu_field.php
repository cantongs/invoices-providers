<?php

use Illuminate\Database\Migrations\Migration;

class ArticlesActiuField extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articles', function($table)
		{
			$table->boolean('actiu');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('articles', function($table)
		{
			$table->dropColumn('actiu');
		});
	}

}