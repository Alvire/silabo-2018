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

Route::group(['prefix' => 'semestres'], function(){
	Route::get('/', [
		'uses'=>'SemestreController@index',
		'as'=>'semestres.index']);
	Route::get('create', [
		'uses'=>'SemestreController@create',
		'as'=>'semestres.create']);
	Route::post('/',[
		'uses'=>'SemestreController@store',
		'as'=>'semestres.store']);
	Route::get('{semestre}',[
		'uses'=>'SemestreController@show',
		'as'=>'semestres.show']);
	Route::get('{semestre}/edit',[
		'uses'=>'SemestreController@edit',
		'as'=>'semestres.edit']);
	Route::put('{semestre}',[
		'uses'=>'SemestreController@update',
		'as'=>'semestres.update']);
	Route::get('{id}/destroy',[
		'uses'=>'SemestreController@destroy',
		'as'=>'semestres.destroy']);
});

Route::group(['prefix' => 'personas'], function(){
	Route::get('/', [
		'uses'=>'PersonaController@index',
		'as'=>'personas.index']);
	Route::get('create', [
		'uses'=>'PersonaController@create',
		'as'=>'personas.create']);
	Route::post('/',[
		'uses'=>'PersonaController@store',
		'as'=>'personas.store']);
	Route::get('{persona}/edit',[
		'uses'=>'PersonaController@edit',
		'as'=>'personas.edit']);
	Route::put('{persona}',[
		'uses'=>'PersonaController@update',
		'as'=>'personas.update']);
	Route::get('{id}/destroy',[
		'uses'=>'PersonaController@destroy',
		'as'=>'personas.destroy']);
});

Route::group(['prefix' => 'cursos'], function(){
	Route::get('/', [
		'uses'=>'CursoController@index',
		'as'=>'cursos.index']);
	Route::get('create', [
		'uses'=>'CursoController@create',
		'as'=>'cursos.create']);
	Route::post('/',[
		'uses'=>'CursoController@store',
		'as'=>'cursos.store']);
	Route::get('{curso}/edit',[
		'uses'=>'CursoController@edit',
		'as'=>'cursos.edit']);
	Route::put('{curso}',[
		'uses'=>'CursoController@update',
		'as'=>'cursos.update']);
	Route::get('{id}/destroy',[
		'uses'=>'CursoController@destroy',
		'as'=>'cursos.destroy']);
});

Route::group(['prefix' => 'silabos'], function(){
	Route::get('/', [
		'uses'=>'SilaboController@index',
		'as'=>'silabos.index']);
	Route::get('create', [
		'uses'=>'SilaboController@create',
		'as'=>'silabos.create']);
	Route::post('/',[
		'uses'=>'SilaboController@store',
		'as'=>'silabos.store']);
	Route::get('{silabo}/edit',[
		'uses'=>'SilaboController@edit',
		'as'=>'silabos.edit']);
	Route::put('{silabo}',[
		'uses'=>'SilaboController@update',
		'as'=>'silabos.update']);
	Route::get('{id}/destroy',[
		'uses'=>'SilaboController@destroy',
		'as'=>'silabos.destroy']);
});
