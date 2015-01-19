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
	return View::make('index', [
		]);
});


Route::post('submit_accept', function()
{

    $start_date = Input::get('start_date');
    $end_date = Input::get('end_date');
    $created_by = 'nicole';
    $created_on = date("Y-m-d");

    DB::insert("INSERT INTO appointments (start_date, end_date, created_by, created_on) VALUES (?, ?, ?, ?)", [$start_date, $end_date, $created_by, $created_on]);

    $records = DB::select("SELECT * FROM appointments WHERE start_date = ?", [$start_date]);
    $first_record = $records[0];

    $start_date = $first_record->start_date;
    $start_date = Carbon::parse($start_date);
    $end_date = Carbon::parse($end_date);

	$today_date = Carbon::now();
	$totes_wait = $start_date->diffInDays($end_date);
	$since_then = $start_date->diffInDays($today_date);
	$until_then = $end_date->diffInDays($today_date);
	$percentage_done = ($since_then/$totes_wait)*100;

    $start_date = $start_date->toFormattedDateString();
    $end_date = $end_date->toFormattedDateString();


	return View::make('submit_accept', [
		'start_date' => $start_date,
		'end_date' =>$end_date,
		'today_date' =>$today_date,
		'totes_wait' =>$totes_wait,
		'since_then' =>$since_then,
		'until_then' =>$until_then,
		'percentage_done' =>$percentage_done,
	]);

});


Route::get('result', function()
{



	$records = DB::select("SELECT * FROM appointments WHERE start_date = ?", [$start_date]);
    $first_record = $records[0];

    $start_date = $first_record->start_date;

	$start_date = Carbon::instance($start_date);

	$today_date = Carbon::now();
	$end_date = Carbon::create(2015, 2, 12);
	$totes_wait = $start_date->diffInDays($end_date);
	$since_then = $start_date->diffInDays($today_date);
	$until_then = $end_date->diffInDays($today_date);
	$percentage_done = ($since_then/$totes_wait)*100;

	return View::make('result', [
		'start_date' =>$start_date,
		'today_date' =>$today_date,
		'end_date' =>$end_date,
		'totes_wait' =>$totes_wait,
		'since_then' =>$since_then,
		'until_then' =>$until_then,
		'percentage_done' =>$percentage_done,
		]);
});


