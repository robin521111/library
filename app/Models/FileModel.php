<?php

namespace Library;

use Illuminate\Database\Eloquent\Model;

class FileModel extends Model
{
	protected $table = 'files';
	public $timestamps =false;
	protected $connection='mysql';
}
