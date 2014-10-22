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

	Route::get("/text", function()
		{
			return View::make("text");
		}
	);

	Route::post("/text", function()
		{
			return "Post Text";
		}
	);

	Route::get("/users", function()
		{
			return View::make("users");
		}
	);

	Route::post("/users", function()
		{
			return "Post Users";
		}
	);

