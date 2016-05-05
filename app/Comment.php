<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Comment extends Eloquent
{
	protected $fillable = array();
	public function restaurant()
	{
		return $this->belongsTo('App\Restaurant');
	}
	public function customer()
	{
		return $this->belongsTo('App\Customer');
	}
}