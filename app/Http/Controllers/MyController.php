<?php namespace App\Http\Controllers;

Class MyController extends Controller
{
	public function index($name = 'user')
	{
		return view('hi', ['name' => $name]);
	}
}