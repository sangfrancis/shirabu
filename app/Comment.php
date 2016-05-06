<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Comment extends Eloquent
{
	protected $fillable = array('customer_id', 'resraurant_id', 'body', 'like');
	public function restaurant()
	{
		return $this->belongsTo('App\Restaurant');
	}
	public function customer()
	{
		return $this->belongsTo('App\Customer');
	}
}