<?php

use Illuminate\Support\Facades\Route;

Route::group(array('prefix' => 'app'), function() {
  Route::get('/', function() {
    return response()->json(['message' => 'Jobs API', 'status' => 'Conected']);
  });

  Route::resource('jobs', 'JobsController');
  Route::resource('users', 'UsersController');
});

Route::get('/', function() {
  return redirect(('app'));
});
