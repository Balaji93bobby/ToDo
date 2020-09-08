<?php

use Illuminate\Support\Facades\DB;

Route::get('/travel', function () {
  $visited = DB::select('select * from places where visited = ?', [1]); 
  $togo = DB::select('select * from places where visited = ?', [0]);

  return view('travel_list', ['visited' => $visited, 'togo' => $togo ] );
});


Route::get('/', function () {
  $visited = DB::select('select * from places where visited = ?', [1]); 
  $togo = DB::select('select * from places where visited = ?', [0]);

  return view('welcome', ['visited' => $visited, 'togo' => $togo ] );
});

// Authentication Routes...
Route::auth();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/submit', function () {
  return view('submitTask');
});