<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class RestaurantCategory extends Eloquent
{
	protected $fillable = array();
	protected $table = 'restaurant_category';
}