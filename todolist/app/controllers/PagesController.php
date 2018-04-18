<?php 

namespace App\Controllers;

class PagesController
{
	public function home()
	{
		//require 'views/index.view.php';		
		return view('index');
	}

	public function about()
	{
		return view('about');
	}

	public function contact() 
	{
		return view('contact');
	}
}