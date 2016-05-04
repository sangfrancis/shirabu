<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Location extends Eloquent
{
	protected $fillable = array('long', 'lat');
	public function restaurant()
	{
		return $this->belongsTo('App\Restaurant');
	}
}