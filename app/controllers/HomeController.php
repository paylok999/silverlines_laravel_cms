<?php

use Silverlines\CMS\Users;

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public $users;
	
	public function __construct(Users $users)
	{
		$this->users = $users;
	}
	
	
	public function showAllUsers()
	{
		$data['users'] = $this->users->showAllUsers();
		//var_dump($data);
		return View::make('allusers', $data);
		
	}
	
	public function showUser($id)
	{
		$data['user'] = $this->users->showUser($id);
		return View::make('edituser', $data);
		
	}
	
	public function createUserView(){
		return View::make('adduser');
	}
	
	public function createUser(){
		$data = Input::all();
		$this->users->createUser($data);
		return Redirect::back()->withSuccess('User has been created!');
	}
	
	public function updateUser()
	{
		$data = Input::all();
		$this->users->updateUser($data);
		return Redirect::back()->withSuccess('User has been updated!');
	}
	
	public function deleteUser($id)
	{
		$this->users->deleteUser($id);
		return Redirect::back()->withSuccess('User has been deleted!');
	}


}
