<?php

use Illuminate\Database\Seeder;
use App\Zipcode;

class ZipcodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zipcodes = [
        	['id' => 1, 'city_id' => 1, 'description' => '00001'],
        	['id' => 2, 'city_id' => 2, 'description' => '00002'],
        	['id' => 3, 'city_id' => 3, 'description' => '00003'],
        	['id' => 4, 'city_id' => 4, 'description' => '00004'],
        	['id' => 5, 'city_id' => 5, 'description' => '00005'],
			['id' => 6, 'city_id' => 6, 'description' => '00006'],
			['id' => 7, 'city_id' => 7, 'description' => '00007'],

        ]; 
           foreach($zipcodes as $code)
        {
        	Zipcode::create($code);
        } 
    }
}
