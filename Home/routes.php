<?php


//Landing
Route::get("/pfsahid", function() {
	return view('SahidHome::index');
	
	});

//Construct
	Route::get("/home", "Sahid\Home\Http\Controllers\HomeController@index");
//middleware
	Route::group(array('middleware'=>'auth'), function() {
	
	Route::get('/success', function() {
		return view('SahidHome::info.success');
		});
	});



//info 
	Route::get('/abort', function() {
	return view('SahidHome::info.abort');
	});
	Route::get('/escape', function() {
	return view('SahidHome::info.escape');
	});
	Route::get('/registered', function() {
	return view('SahidHome::info.registered');
	});

	