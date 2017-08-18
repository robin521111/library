<?php

namespace Library\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Library\BookModel;

class AlbumController extends Controller
{
    public function index()
    {
    	return view('album.index');
    }

    
}
