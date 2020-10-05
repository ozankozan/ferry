<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Post extends Model
{
	use Resizable;

	public function thumbnail($type, $attribute = 'image')
	{
		// Return empty string if the field not found
		if (!isset($this->attributes[$attribute])) {
			return '';
		}

		// We take image from posts field
		$image = $this->attributes[$attribute];

		// We need to get extension type ( .jpeg , .png ...)
		$ext = pathinfo($image, PATHINFO_EXTENSION);

		// We remove extension from file name so we can append thumbnail type
		$name = str_replace_last('.'.$ext, '', $image);

		// We merge original name + type + extension
		return $name.'-'.$type.'.'.$ext;
	}
}
