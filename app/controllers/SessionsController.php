<?php

class SessionsController extends \BaseController {

	/**
	 * Show the form for logging in
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Log the user in
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('username', 'password');

		$rules = [
			'username' => 'required',
			'password' => 'required'
		];

		$validator = Validator::make($input, $rules);

		if ($validator->fails()) 
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if (Auth::attempt($input, true)) return Redirect::to('/');
		else return Redirect::back()->withErrors(['Invalid username or password.']);
	}

	/**
	 * Log the user out
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Flash::message('You have been logged out');

		Auth::logout();

		return Redirect::to('login');
	}

}