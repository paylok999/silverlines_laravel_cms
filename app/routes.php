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


App::bind('Silverlines\CMS\Repositories\UsersRepositoryInterface', 'Silverlines\CMS\Repositories\UsersRepository');
App::bind('Silverlines\CMS\DataAccessObject\UsersDaoInterface', 'Silverlines\CMS\DataAccessObject\MySqlUsersDao');

Route::get('/', 'HomeController@showAllUsers');
Route::get('/edit/{id}', 'HomeController@showUser');
Route::get('/delete/{id}', 'HomeController@deleteUser');
Route::get('/create', 'HomeController@createUserView');

Route::post('/update', 'HomeController@updateUser');
Route::post('/create', 'HomeController@createUser');
