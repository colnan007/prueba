<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function zipcodes()
    {
    	return $this->hasMany(Zipcode::class);
    }
     public function customers()
    {
    	return $this->hasMany(Customer::class);
    }
}