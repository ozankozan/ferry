<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Timetable extends Model
{
	protected $table = 'timetables';

	public function scopeTimetables($query)
	{
		return $query->orderBy( 'time', 'asc' );
	}
}

