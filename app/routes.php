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
	$totes_wait = $start_date->diffInDays($end_date);
	$since_then = $start_date->diffInDays($today_date);
	$until_then = $end_date->diffInDays($today_date);
	$percentage_done = ($since_then/$totes_wait)*100;

	return View::make('index', [
		'start_date' =>$start_date,
		'today_date' =>$today_date,
		'end_date' =>$end_date,
		'totes_wait' =>$totes_wait,
		'since_then' =>$since_then,
		'until_then' =>$until_then,
		'percentage_done' =>$percentage_done,
		]);

});



