<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Maker;
use App\Vehiculo;
use Database\seeds;
class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */

	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		Maker::truncate();
		Model::unguard();

		$this->call('MakerSeed');
		$this->call('VehiculosSeed');
		// $this->call('UserTableSeeder');
		//Model::reguard();
	}

}
