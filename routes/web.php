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
    return view('login');
});

Route::get('/main', function(){
	return view('main');
});

Route::post('/main', 'Controller@login');

Route::get('/forum',function(){
	return view('forum');
});

Route::get('/add_topic',function(){
	return view('add_topic');
});

Route::post('/save_topic', 'Controller@add_topic');

	

Route::post('/add_comment', 'Controller@add_comment');

Route::get('view_discuss', 'Controller@view_discuss');

Route::get('view_topic/{id}', 'Controller@view_topic');


