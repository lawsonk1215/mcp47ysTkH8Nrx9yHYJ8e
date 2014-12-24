<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/image-factory', function()
{
	$counter = 103;
	$dirf    = public_path() . "/before-images";
	$destinationPath = public_path() . '/images/pictures/';
	$dir = scandir($dirf);

	foreach($dir as $file) 
	{
	   if(($file!='..') && ($file!='.')) 
	   {
	      if($counter!=103) 
	      {
	      	echo $dirf . '/' . $file . '<br>';
	      	$image = Image::make(file_get_contents($dirf . '/' . $file));
	      	$fileName = $counter . '.jpg';
	      	$image->save($destinationPath . $fileName);
	      }
	      $counter++;
	   }
	}
});


/********************** Login Layout Routes ************************/


Route::get('/', function()
{
	return Redirect::to('slideshow');
});

Route::get('/defaultsite', function()
{
	return Redirect::to('slideshow');
});

/**
 * Login Form
 */
Route::get('/login', [
	'as' => 'login_path',
	'uses' => 'SessionsController@create'
]);

Route::post('/login', [
	'uses' => 'SessionsController@store'
]);


Route::get('/slideshow', [
	'uses' => 'PictureController@slideshow'
]);


Route::get('/gallery', [
	'uses' => 'PictureController@index'
]);


Route::post('/gallery', [
	'uses' => 'PictureController@index'
]);

/********************** Add Picture Routes ************************/
Route::get('/add-pictures', [
	'uses' => 'PictureController@create'
]);


Route::post('/add-pictures', [
	'uses' => 'PictureController@store'
]);


Route::get('/gallery/{id}/edit', [
	'uses' => 'PictureController@edit'
]);


Route::post('/add-pictures', [
	'uses' => 'PictureController@store'
]);


/********************** Add Family Routes ************************/
Route::get('/add-family', [
	'uses' => 'PeopleController@create'
]);

Route::post('/add-family', [
	'uses' => 'PeopleController@store'
]);