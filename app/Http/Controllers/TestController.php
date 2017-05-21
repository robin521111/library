<?php

namespace Liberary\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function form()
	 {
	 	return('test.form');
	 } 

	public function validate(Request\FormRequest $request)
	{
			return 'success';
	}

    //
}
