<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	function product()
	{
		return $this->belongsTo('App\Model\Product');
	}
}
