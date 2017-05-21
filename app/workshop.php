<?php

namespace Liberary;

use Illuminate\Database\Eloquent\Model;

class workshop extends Model
{
    public function workshop()
    {
    	return $this->hasOne('Library\BookModel');
    }
}
