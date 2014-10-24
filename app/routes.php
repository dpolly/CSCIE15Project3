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

	/** Homepage */
	Route::get('/', function()
		{
			return View::make("master");
		}
	);

	/** Routes for Loreum Ipsum Text Generator */
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

	/**Routes for Web Development Tools */
	Route::get("/tools", function()
	{
		return View::make("tools");
	}
	);

	/** Routes for Random User Generators */
	Route::get("/users", function()
		{
			return View::make("users");
		}
	);
	Route::post("/users", function()
		{
			$users = Input::get('users');
			return View::make("usergen")
				->with ('num_users', $users);
		}
	);

	/** Routes for Web Validators */
	Route::get("/validators", function()
		{
			return View::make("validators");
		}
	);