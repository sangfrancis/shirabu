<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Detail extends Eloquent
{
	protected $fillable = array();
	public function restaurant()
	{
		return $this->belongsTo('App\Restaurant');
	}
}