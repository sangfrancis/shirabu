<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Eloquent;
class Customer extends Eloquent
{
	protected $fillable = array();
	public function file()
	{
		return $this->hasOne('App\CustomerFile');
	}
}