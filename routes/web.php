<?php

use Illuminate\Support\Facades\DB;

Route::get('/travel', function () {
  $visited = DB::select('select * from places where visited = ?', [1]); 
  $togo = DB::select('select * from places where visited = ?', [0]);

  return view('travel_list', ['visited' => $visited, 'togo' => $togo ] );
});


Route::get('/welcome', function () {
  $visited = DB::select('select * from places where visited = ?', [1]); 
  $togo = DB::select('select * from places where visited = ?', [0]);

  return view('welcome', ['visited' => $visited, 'togo' => $togo ] );
});

// Authentication Routes...
Route::auth();
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', 'HomeController@index')->name('home');

Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/todos', 'TodoController@index');
Route::post('/todo', 'TodoController@store');
Route::delete('/todo/{todo}', 'TodoController@destroy');

Route::get('/myTodos', 'TodoController@todos');


Route::post('/assignTodo', 'TodoController@assign');


Route::get('/submit', function () {
  return view('submitTask');
});

Route::get('/submitTodo', function () {
  return view('submitTodo');
});

Route::get('/users', function () {
  return view('user');
});



Route::get('/assign', function () {
  $users = DB::table('users')
        ->get();
  $list = $users->map(
      function($place) {
          return [
              "label" => $place->name,
              "value" => $place->id
          ];
      }
  );

  $todos = DB::table('todos')
        ->get();
  $list_todos = $todos->map(
      function($place) {
          return [
              "label" => $place->title,
              "value" => $place->id
          ];
      }
  );
  return view('assign',['users' => $list, 'todos' => $list_todos]);
});