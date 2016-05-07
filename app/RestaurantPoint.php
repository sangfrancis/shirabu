<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class RestaurantPoint extends Eloquent
{
	protected $fillable = array();

	protected $table = 'restaurant_points';
	public function restaurant()
	{
		return $this->belongsTo('App\Restaurant');
	}
	
}