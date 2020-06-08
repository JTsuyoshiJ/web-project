<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function siteAction(Request $request)
	{
		return view('welcome');
	}
	public function accesuarsAction(Request $request)
	{
		return view('accesuars');
	}
	public function computersAction(Request $request)
	{
		return view('computers');
	}
	public function corzAction(Request $request)
	{
		return view('corz');
	}
	public function garden_and_repairAction(Request $request)
	{
		return view('garden_and_repair');
	}
	public function officeAction(Request $request)
	{
		return view('office');
	}
	public function phones_and_gadjetsAction(Request $request)
	{
		return view('phones_and_gadjets');
	}
	public function photo_and_vidiosAction(Request $request)
	{
		return view('photo_and_vidios');
	}
	public function technicalAction(Request $request)
	{
		return view('technical');
	}
	public function getproducts(Request $request)
	{
		return (new ProductController())->show();
	}
}
