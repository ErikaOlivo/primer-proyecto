<?php 

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Vehiculo;

use Faker\Factory as Faker;

class VehiculosSeed extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();


		for($i = 0; $i < 30; $i++)
		{
			Vehiculo::create 		
			([
				/*'id' => $faker::name(),*/
				'color' => $faker->safeColorName(),
				'power' => $faker->randomNumber(),
				'capacity' => $faker->randomFloat(),
				'speed' => $faker->randomFloat(),
				'maker_id' => $faker->numberBetween(1,5)
			]);
		}
		
		
	}

}