<?php

Eloquent::unguard(); // disable mass assignement protection

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('ContentSeeder');
		$this->command->info('Content tables seeded!');
	}

}

class ContentSeeder extends Seeder {
	
	public function run()
	{
		// using truncate function so all info will be cleared when re-seeding.

		DB::table('articles')->delete();
		DB::table('factures')->delete();
		DB::table('proveidors')->delete();

		Article::create(array('descripcio' => 'Memoria RAM DDR3', 'nserie' => '45DSFV657', 'quantitat' => 1, 'idfactura' => 1));
		Article::create(array('descripcio' => 'HD 2TB Seagate', 'nserie' => 'SNBVNDD', 'quantitat' => 2, 'idfactura' => 1));
		Factura::create(array('idfactura' => '10/2013', 'data' => '25/11/2013', 'idproveidor' => 1));
		Proveidor::create(array('nom' => 'alvin networks', 'actiu' => true));
	}

}