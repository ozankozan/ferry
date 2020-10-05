<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Port extends Model
{
	protected $table = 'Ports';

	public function scopePorts($query)
	{
		return $query->orderBy( 'name', 'asc' );
	}
    
}
