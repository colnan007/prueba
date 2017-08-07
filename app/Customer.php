<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $fillable=['name','company_name','phone','email','address_1', 'address_2','city_id','zipcode_id'];
     public function city()
    {
    	return $this->belongsTo(City::class);
    }
     public function zipcode()
    {
    	return $this->belongsTo(Zipcode::class);
    }
}
