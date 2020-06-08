<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
	//Выводит данные из таблицы Products
	public function show()
    {
		dump(Product::all());
	}
}
