<?php

class RemindersController extends Controller {

	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		return View::make('password.remind');
	}

	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postRemind()
	{
		$response = Password::remind(Input::only('email'), function($message)
	    {
	        $message->subject('Password Reminder');
	    });
	    
		switch ($response)
		{
			case Password::INVALID_USER:
				return Redirect::back()->with('error', Lang::get($response));
			case Password::REMINDER_SENT:
				return Redirect::to('login')->with('success', 'An email has been sent');
		}
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)) App::abort(404);

		return View::make('unregisterUserView.reset')->with('token', $token);
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{
		$credentials = Input::only(
			'email', 'password', 'password_confirmation', 'token'
		);
		
		$rules = array(
			'email' => 'required|email',
			'password' => 'required|min:6',
			'password_confirmation' => 'required|min:6|same:password'
		);
		
		$v = Validator::make($credentials, $rules);
		
		if($v->passes()){
			$response = Password::reset($credentials, function($user, $password)
			{
				$user->password = Hash::make($password);

				$user->save();
			});
			return Redirect::to('login')->with('success', 'Your password has been reset');
		} else {
		 	
			// Show Validation Errors
		 	return Redirect::back()->withInput()->withErrors($v);
		 }

		// switch ($response)
		// {
		// 	case Password::INVALID_PASSWORD:
		// 	case Password::INVALID_TOKEN:
		// 	case Password::INVALID_USER:
		// 		return Redirect::back()->with('error', Lang::get($response));

		// 	case Password::PASSWORD_RESET:
		// 		return Redirect::to('login')->with('success', 'Your password has been reset');
		// }
	}

}
