<?php namespace App\Http\Controllers;

class MyController extends Controller
{
	public function index($name = 'Dislevis')
	{
		return view('hi',['name' => $name]);
	}
}
