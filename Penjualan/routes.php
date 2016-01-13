<?php
//Guest's Pages
Route::get("/contact", "Sahid\User\Http\Controllers\ProfileController@contact");
Route::get("/listgame", "Sahid\Penjualan\Http\Controllers\GameController@show");

//Register
Route::get("/ksm/register", "Sahid\Penjualan\Http\Controllers\KsmController@create");
Route::post("/ksm/store", "Sahid\Penjualan\Http\Controllers\KsmController@store");

//Must be login first!
Route::group(array('middleware'=>'auth'), function() {

	//Member Management
	Route::get("/members", "Sahid\Penjualan\Http\Controllers\KsmController@index");
	Route::get("/members/{id}", "Sahid\Penjualan\Http\Controllers\KsmController@show")->where("id", "\d+");
	Route::get("/members/{id}/edit", "Sahid\Penjualan\Http\Controllers\KsmController@edit");
	Route::post("/members/{id}/update", "Sahid\Penjualan\Http\Controllers\KsmController@update");
	Route::get("/members/{id}/delete", "Sahid\Penjualan\Http\Controllers\KsmController@delete");
	Route::get("/members/{id}/jual", "Sahid\Penjualan\Http\Controllers\KsmController@jual");
	Route::post("/members/{id}/prosesjual", "Sahid\Penjualan\Http\Controllers\KsmController@prosesjual");
	Route::get("/pesan", "Sahid\Penjualan\Http\Controllers\GameController@form");

	//Game Management
	Route::get("/games", "Sahid\Penjualan\Http\Controllers\GameController@index");
	Route::get("/daftargame", "Sahid\Penjualan\Http\Controllers\GameController@daftargame");
	Route::get("/games/create", "Sahid\Penjualan\Http\Controllers\GameController@create");
	Route::post("/games/store", "Sahid\Penjualan\Http\Controllers\GameController@store");
	Route::get("/games/{id}/edit", "Sahid\Penjualan\Http\Controllers\GameController@edit");
	Route::post("/games/{id}/update", "Sahid\Penjualan\Http\Controllers\GameController@update");
	Route::get("/games/{id}/delete", "Sahid\Penjualan\Http\Controllers\GameController@delete");

	//Kategori Management
	Route::get("/kategories", "Sahid\Penjualan\Http\Controllers\KategoriController@index");
	Route::get("/kategori/create", "Sahid\Penjualan\Http\Controllers\KategoriController@create");
	Route::post("/kategories/store", "Sahid\Penjualan\Http\Controllers\KategoriController@store");
	Route::get("/kategories/{id}/edit", "Sahid\Penjualan\Http\Controllers\KategoriController@edit");
	Route::post("/kategories/{id}/update", "Sahid\Penjualan\Http\Controllers\KategoriController@update");
	Route::get("/kategories/{id}/delete", "Sahid\Penjualan\Http\Controllers\KategoriController@delete");
	Route::post("/kategories/{id}/prosestambah", "Sahid\Penjualan\Http\Controllers\KsmController@prosestambah");	

});
?> 