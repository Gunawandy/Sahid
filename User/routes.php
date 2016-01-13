<?php
Route::get('/auth/login', ['as'=>'user_auth_login',
	'uses'=>'Sahid\User\Http\Controllers\AuthController@loginForm']);
Route::post('/auth/proses-login', 'Sahid\User\Http\Controllers\AuthController@prosesLogin');
Route::get('/auth/logout', ['as'=>'user_auth_logout',
	'uses'=>'Sahid\User\Http\Controllers\AuthController@logout']);

//autentifikasi


//Must be logged in first!
Route::group(array('middleware'=>'auth'), function() {

	//Register petugas
	Route::get("/user/register", "Sahid\User\Http\Controllers\UserController@create");
	Route::post("/user/store", "Sahid\User\Http\Controllers\UserController@store");

	//User Management
	Route::get("/users", "Sahid\User\Http\Controllers\UserController@index");
	Route::get("/user", "Sahid\User\Http\Controllers\UserController@petugasUser");
	Route::get("/user/{id}/edit", "Sahid\User\Http\Controllers\UserController@edit");
	Route::post("/user/{id}/update", "Sahid\User\Http\Controllers\UserController@update");
	Route::get("/user/{id}/delete", "Sahid\User\Http\Controllers\UserController@delete");

	//Profile Management
	Route::get("/petugas", "Sahid\User\Http\Controllers\ProfileController@index");
	Route::get("/konsumen", "Sahid\User\Http\Controllers\ProfileController@konsumen");
	Route::get("/daftargame", "Sahid\Penjualan\Http\Controllers\GameController@daftargame");
	Route::get("/profile", "Sahid\User\Http\Controllers\ProfileController@petugasProfile");
	Route::get("/profile/{id}", "Sahid\User\Http\Controllers\ProfileController@show")->where("id", "\d+");
	Route::get("/profile/{id}/edit", "Sahid\User\Http\Controllers\ProfileController@edit");
	Route::post("/profile/{id}/update", "Sahid\User\Http\Controllers\ProfileController@update");
});
?>