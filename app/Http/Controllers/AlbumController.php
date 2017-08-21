<?php

namespace Library\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Library\BookModel;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    public function index()
    {
    	return view('album.index');
    }

    public function uploadPic(Request $request)
    {
    	print_r($request->all());
    	$path=$request->file('avator')->store('avatars');
    	return $path;
    }

    
}
