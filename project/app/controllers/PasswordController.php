<?php

class PasswordController extends BaseController {
 
    //Route for laravel to send password recovery email
    public function request()
    {
      $credentials = array('email' => Input::get('email'), 'password' => Input::get('password'));
     
      // return Password::remind($credentials);
      Password::remind($credentials);
      return Redirect::to('login')->with('success', 'An email has been sent');
      
    }
    
    //makes the view for users to type in their new password
    public function reset($token)
    {
      return View::make('unregisterUserView.reset',compact('email'))->with('token', $token);
    }
    
    public function update()
    {

  		$credentials = array('email' => Input::get('email'), 
  		                     'password' => Input::get('password'), 
  		                     'password_confirmation' => Input::get('password_confirmation')
  		                     );
      
      return Password::reset($credentials, function($user, $password)
      {
        $user->password = Hash::make($password);
      
        $user->save();
      
        return Redirect::to('login')->with('success', 'Your password has been reset');
      });
     
      
    }
}
