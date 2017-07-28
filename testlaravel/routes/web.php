<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', 'TaskController@index');

Route::post('/tasks', 'TaskController@saveTache');

Route::post('/tasks/delete', 'TaskController@supTache');

// Route::get('categories', function(){
//   $category = APP\Category::find(1);
//
// })
