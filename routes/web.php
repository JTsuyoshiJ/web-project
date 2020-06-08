<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ApiController@siteAction');

Route::get('/accesuars', 'ApiController@accesuarsAction');

Route::get('/computers', 'ApiController@computersAction');

Route::get('/corz', 'ApiController@corzAction');

Route::get('/garden_and_repair', 'ApiController@garden_and_repairAction');

Route::get('/office', 'ApiController@officeAction');

Route::get('/phones_and_gadjets', 'ApiController@phones_and_gadjetsAction');

Route::get('/photo_and_vidios', 'ApiController@photo_and_vidiosAction');

Route::get('/technical', 'ApiController@technicalAction');

Route::get('/getproducts', 'ApiController@getProducts');