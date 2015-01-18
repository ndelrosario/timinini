<?php

use Carbon\Carbon;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$start_date = Carbon::create(2014, 10, 25);
	$today_date = Carbon::now();
	$end_date = Carbon::create(2015, 7, 14);

	return View::make('hello', [
		'start_date' =>$start_date,
		'today_date' =>$today_date,
		'end_date' =>$end_date,
		]);
});



