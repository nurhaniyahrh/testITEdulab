<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home | Edulab'
		];
		
		return view('pages/home', $data);
	}
}
