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

	Route::get('/', function()
		{
			return View::make("master");
		}
	);

	Route::get('/text', function()
		{
			return View::make("text");
		}
	);

	Route::post("/text", function()
		{
			$paragraph = Input::get('paragraph');
			return View::make("txtgen")
				->with ('num_paragraphs', $paragraph);
		}
	);


	Route::get("/users", function()
		{
			return View::make("users");
		}
	);
