<?php

namespace Liberary;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
	protected $table = 'Album';
	public $timestamps =false;
	protected $connection='mysql';
	
}
