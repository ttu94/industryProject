<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('unregisterUserView.home');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('unregisterUserView.register');
	}


	/**
	 * Store a newly user resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		
		//Encrypts password
		$password = $input['password'];
		$encrypted = Hash::make($password);
		
		$rules = array(
			'firstName' => 'required|min:2|alpha',
			'lastName' => 'required|alpha',
			'age' => 'numeric|required|min:2|max:100',
			'gender' => 'required',
			'country' => 'required',
			'email' => 'required|email|unique:users',  //unique email in the user table
			'email_confirmation' => 'required|email|same:email',
			'password' => 'required|min:5',
			'password_confirmation' => 'required|min:5|same:password',
			'injuryDate' => 'before:today'
			);
		
		$v = Validator::make($input, $rules);
		
		if ($v->passes()){
			$user = new User;
			$user->firstName = $input['firstName'];
			$user->lastName = $input['lastName'];
			$user->age = $input['age'];
			$user->gender = $input['gender'];
			$user->country = $input['country'];
			$user->email = $input['email'];
			$user->password = $encrypted;
			
			// other details
			$user->usertype = $input['usertype'];
			$user->injuryDate = $input['injuryDate'];
			$user->treatment = $input['treatment'];
			$user->yesTreat = $input['yesTreat'];
			$user->clinicalTrial = $input['clinicalTrial'];
			$user->physioTrial = $input['physioTrial'];
			$user->onBehalf = $input['onBehalf'];
		
			$user->save();
			
			//Kyai (khai*) oops <3<3,3 i dont know how to route to userProfilePage with ID for register or login. It also might be convenient to log them in when they register
			Auth::login($user);
			// return View::make('unregisterUserView.login', $user->id);
			return Redirect::action('UserController@PremoduleQuestionaire', array($user->id));
		 } else {
		 	
			// Show Validation Errors
		 	return Redirect::back()->withInput()->withErrors($v);
		 }
	}

	public function PremoduleQuestionaire($id)
		{
			//show the users profile
			if(Auth::user()->id == $id){
				$user = User::find($id);
				return View::make('registeredUserView.preQuestion');
				// return View::make('registeredUserView.userProfilePage')->withUser($user);
			} else {
				Auth::logout();
				return Redirect::action('UserController@index');
			}
		}
	
	public function show($id)
	{
		//show the users profile
		if(Auth::user()->id == $id){
			$user = User::find($id);
			return View::make('registeredUserView.userProfilePage')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	//route: update_details. used for users to edit account details page
	
	public function UpdateDetails($id){
		if(Auth::user()->id == $id){
			$user = User::find($id);
			return View::make('registeredUserView.updateDetails')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}

	//Route:user.update. Used when user click save changes when updating account
	public function update($id)
	{
		if(Auth::user()->id == $id){
			$user = User::find($id);
			$input = Input::all();
	
			$rules = array(
				'firstName' => 'required|min:2',
				'lastName' => 'required',
				'age' => 'numeric|required|min:2|max:100',
				'gender' => 'required',
				'country' => 'required',
				'injuryDate' => 'before:today',
				'email'=>'required|email|unique:users,email,'.$id
				);
			
			$v = Validator::make($input, $rules);
			
			if ($v->passes()){
				$user->firstName = $input['firstName'];
				$user->lastName = $input['lastName'];
				$user->age = $input['age'];
				$user->gender = $input['gender'];
				$user->country = $input['country'];
				$user->email = $input['email'];
				$user->usertype = $input['usertype'];
				
				$user->injuryDate = $input['injuryDate'];
				$user->treatment = $input['treatment'];
				$user->yesTreat = $input['yesTreat'];
				$user->clinicalTrial = $input['clinicalTrial'];
				$user->physioTrial = $input['physioTrial'];
				$user->onBehalf = $input['onBehalf'];
			
				$user->save();
	
				return Redirect::action('UserController@AccountDetails', array($user->id))->with('update_success', 'Update Account Was Successful!');
			 } else {
			 	
				// Show Validation Errors
			 	return Redirect::back()->withInput()->withErrors($v);
			 }
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	//Route: update_password. Used when users click Change password
	public function UpdatePassword($id){
		
		$user = User::find($id);
		$input = Input::all();
		
		//Encrypts password
		$new_password = $input['new_password'];
		$encrypt = Hash::make($new_password);
		
		//Custom validation rule. password must match password in DB
		Validator::extend('hashmatch', function($attribute, $value, $parameters)
		{
		    // return Hash::check('password', Auth::user()->password);
		    return Hash::check($value, Auth::user()->$parameters[0]);
		});
		
		$messages = array(
		    'hashmatch' => 'Your current password must match your account password.'
		);
		
		$rules = array(
			'password' => 'required|hashmatch:password',
			'new_password' => 'required|min:5|different:password',
			'confirm_password' => 'required|min:5|same:new_password'
		);
		
		$v = Validator::make($input, $rules, $messages);
		
		if ($v->passes()){
			$user->password = $encrypt;
			$user->save();
			return Redirect::action('UserController@AccountDetails', array($user->id))->with('success', 'Password Change Successful!');
		 } else {
			// Show Validation Errors
		 	return Redirect::back()->withInput()->withErrors($v);
		 }
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::find($id);
		$user->delete();
		// Auth::logout();
		return Redirect::action('UserController@index');
		
	}

	//USER LOGIN
	public function login() {

		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		
		// authenticates and sets remember me cookie
		if (Auth::attempt($userdata, true))
		{
			return Redirect::action('UserController@show', array(Auth::user()->id));
		} else {
			// return Redirect::to(URL::previous()) -> withInput();
			return Redirect::back()->with('invalid', 'The username or password is incorrect.');
		}
		 
	}
	
	//USER LOGOUT
	public function logout(){
		Auth::logout();
		return Redirect::to('logoutPage');
		
	}
	
	//route: account_details. used for users to view account details
	public function AccountDetails($id){
		if(Auth::user()->id == $id){
			$user = User::find($id);
			return View::make('registeredUserView.accountDetails')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	//route for immediate module results after submitting a quiz
	public function QuizResults($id){
		
		//NOTE: INCORECT ROUTES. NEEDS TO DRAW DATA FROM DB ^
		if(Auth::user()->id == $id){
			$user = User::find($id);
			return View::make('modulePagesView.quizResult')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	
	public function OverallResults($id){
		
		//NOTE: INCORECT ROUTES. NEEDS TO DRAW DATA FROM DB ^
		if(Auth::user()->id == $id){
			$user = User::find($id);
			return View::make('registeredUserView.overallResult')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	public function IndividualModule($id){
		
		//NOTE: INCORECT ROUTES. NEEDS TO DRAW DATA FROM DB ^
		if(Auth::user()->id == $id){
			$user = User::find($id);
			return View::make('registeredUserView.individualModuleResult')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
}
