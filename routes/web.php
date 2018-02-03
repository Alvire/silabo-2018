<?php


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/create', function () {
    return view('files.create');
});
Route::get('crear', [
			'uses' => 'FileController@create',
			'as' => 'files.create'
		]);
Route::group(['prefix' => 'admin'], function(){
	Route::group(['prefix' => 'files'], function(){
		Route::get('create', [
			'uses' => 'FileController@create',
			'as' => 'files.create'
		]);
	});
	Route::get('crear1', [
			'uses' => 'FileController@create',
			'as' => 'files.create'
		]);
});
*/
Route::group(['prefix' => 'silabo'], function(){
	Route::get('create', function(){
		return view('silabo.create');
	});
});

Route::group(['prefix' => 'docente'], function(){
	Route::get('create', function(){
		return view('docente.create');
	});
});

Route::group(['prefix' => 'semestre'], function(){
	Route::get('create', function(){
		return view('semestre.create');
	});
});

Route::group(['prefix' => 'curso'], function(){
	Route::get('create', function(){
		return view('curso.create');
	});
});