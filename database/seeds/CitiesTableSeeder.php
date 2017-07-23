<?php

use Illuminate\Database\Seeder;
use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $cities = [
        	['id' => 1, 'description' => 'Añasco'],
        	['id' => 2, 'description' => 'Rincón'],
        	['id' => 3, 'description' => 'Mayagüez'],
        	['id' => 4, 'description' => 'Hormigueros'],
        	['id' => 5, 'description' => 'Cabo Rojo'],
        	['id' => 6, 'description' => 'San German'],
        	['id' => 7, 'description' => 'San Sebastían']
        ];

        foreach($cities as $city)
        {
        	City::create($city);
        }
    }
}
