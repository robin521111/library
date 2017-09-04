<?php

namespace Library;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    protected $table ='News';
    public $timestamps =false;
	protected $connection='mysql';
	
}
