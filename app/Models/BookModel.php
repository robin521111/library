<?php

namespace Library;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
	protected $table = 'books';
	public $timestamps =false;
	protected $connection='mysql';
	
}
