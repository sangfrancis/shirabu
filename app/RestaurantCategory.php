<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class RestaurantCategory extends Eloquent
{
	protected $fillable = array();
	protected $table = 'restaurant_category';
	public function category()
	{
		return $this->belongsToMany('App\Category','restaurant_category');
	}
}