<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     public function city()
    {
    	return $this->belongsTo(City::class);
    }
     public function zipcode()
    {
    	return $this->belongsTo(Zipcode::class);
    }
}
