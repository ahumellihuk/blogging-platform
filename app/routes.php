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

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@displayAllPosts'));

Route::get('users/{id}', array('as' => 'user', 'uses' => 'UserController@showUser'));

Route::get('tags/{id}', array('as' => 'tag', 'uses' => 'HomeController@displayPostsByTag'));

Route::get('posts/{id}', array('as' => 'post', 'uses' => 'PostController@displayPost'));

Route::post('posts/new', array('as' => 'new_post', 'uses' => 'PostController@createPost'));

Route::get('login', function()
{
	return "Login Page!";
});
