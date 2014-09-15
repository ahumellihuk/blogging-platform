<?php

class UserController extends BaseController {

	public function showUser($id)
	{
		$user = User::find($id);
		return View::make('profile')->with('user', $user);
	}

}
