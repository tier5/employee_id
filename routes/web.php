<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('employees', 'EmployeeController');
Route::resource('api/nerds', 'NerdController');

Route::any('/android', function () {
	 return array(
      1 => "John",
      2 => "Mary",
      3 => "Steven"
    );
});
Route::any('/id_card/{id}', function ($id) {
	 
     $localFileName  = '../storage/uploads/'.$id.'.jpg';
     $fileData = file_get_contents($localFileName);
     $ImgfileEncode = base64_encode($fileData);

    echo $ImgfileEncode;
     exit;
});

Route::any('/test', function () {
	 echo 'test data';
    exit;
});