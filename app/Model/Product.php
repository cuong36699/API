<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	function reviews()
	{
		return $this->hasMany('App\Model\Review');
	}
}
