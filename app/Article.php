<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Article extends Eloquent
{
	protected $fillable = array();
	public function restaurant()
	{
		return $this->belongsTo('App\Restaurant');
	}
}