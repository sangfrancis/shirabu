<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Restaurant extends Eloquent
{
	protected $fillable = array();
	
	public function category()
	{
		return $this->belongsToMany('App\Category','restaurant_category');
	}
	public function file()
	{
		return $this->hasMany('App\RestaurantFile');
	}
}