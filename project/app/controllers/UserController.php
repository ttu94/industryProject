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
			'password' => 'required|min:6',
			'password_confirmation' => 'required|min:6|same:password',
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
			
			Auth::login($user);
			
			//Sends an email to the user with a welcome message
			Mail::send('emails.welcome', array('firstName'=>Input::get('firstName')), function($message){
    			$message->to(Input::get('email'), Input::get('firstName').' '.Input::get('lastName'))->subject('Welcome to Spinal Cord Rehabilitation!');
    		});
    		
			return Redirect::action('UserController@PremoduleQuestionaire', array($user->id));
		 } else {
		 	
			// Show Validation Errors
		 	return Redirect::back()->withInput()->withErrors($v);
		 }
	}

	//route to bring up the premodule questionaire page
	public function PremoduleQuestionaire($id)
	{
		//show the users profile
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			return View::make('registeredUserView.preQuestion')->withUser(Auth::user()->id);
			// return View::make('registeredUserView.userProfilePage')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	//route to update the user prequestionaire options
	public function UserPremodule($id)
	{
		$user = User::find($id);
		$input = Input::all();
		
		$user->m1 = $input['m1'];
		$user->m2 = $input['m2'];
		$user->m3 = $input['m3'];
		$user->m4 = $input['m4'];
		$user->m5 = $input['m5'];
		$user->m6 = $input['m6'];
		$user->m7 = $input['m7'];
		$user->m8 = $input['m8'];
		$user->m9 = $input['m9'];
		$user->m10 = $input['m10'];
		$user->m11 = $input['m11'];
		
		$user->save();
		
		return Redirect::action('UserController@show', array($user->id));
	}
	
	public function show($id)
	{
		//show the users profile
		if(Auth::user()->id == $id && Auth::user()->status == 1){
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
		$input = Input::all(); 
		Auth::user()->status = 1;
		return Redirect::to('faq');
		// return Redirect::action('UserController@show', array(Auth::user()->id));
	}

	//route: update_details. used for users to edit account details page
	public function UpdateDetails($id){
		if(Auth::user()->id == $id && Auth::user()->status == 1){
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
			'new_password' => 'required|min:6|different:password',
			'confirm_password' => 'required|min:6|same:new_password'
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

		//Deactivates the account and logs them out
		Auth::user()->status = 0;
		Auth::logout();
		return Redirect::to('logoutPage');
	}

	//USER LOGIN
	public function login() {

		$input = Input::all();
		
		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			// 'status' => 1
		);

		// authenticates and sets remember me cookie
		if (Auth::attempt($userdata, true))
		{
			if (Auth::user()->status == 0) {
				return Redirect::action('UserController@ReactivateAccount', array(Auth::user()->id));

			} else {
				return Redirect::action('UserController@show', array(Auth::user()->id));
			}
		}else {
			return Redirect::back()->with('invalid', 'The username or password is incorrect.');
		}
		
	}
	
	//Account reactivation page
	public function ReactivateAccount($id){
		$user = User::find($id);
		return View::make('registeredUserView.ReactivationPage')->withUser($user);
	}
	
	//account reactivtion button route
	public function AccountReactivation($id){

		$user = User::find($id);
		$input = Input::all();
		
		$user->status = 1;
		$user->save();
		
		return Redirect::action('UserController@show', array($user->id));
	}
	
	//USER LOGOUT
	public function logout(){
		Auth::logout();
		return Redirect::to('logoutPage');
	}

	//route: account_details. used for users to view account details
	public function AccountDetails($id){
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			return View::make('registeredUserView.accountDetails')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	//admin login
	public function AdminLogin() {
		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password'),
			'admin' => 1
		);
		
		// authenticates and sets remember me cookie
		if (Auth::attempt($userdata, true))
		{
			return Redirect::action('UserController@AdminShow', array(Auth::user()->id));
		} else {
			// return Redirect::to(URL::previous()) -> withInput();
			return Redirect::back()->with('invalid', 'The username or password is incorrect.');
		}
		 
	}
	
	//admin homepage
	public function AdminShow()
	{
		//show the admin profile if only the user status has admin on true
		if(Auth::user()->admin == '1'){
			// $user = User::find($id);
			// return View::make('adminView.adminHomePage')->withAdmin($user);
			return View::make('adminView.adminHomePage');
		} else {
			Auth::logout();
			return Redirect::action('AdminController@index');
		}
	}
	
	//admin Quiz Editor **************************************************************Need twin to check
	public function AdminQuiz()
	{
		if(Auth::user()->admin == '1'){
			// $user = User::find($id);
			// return View::make('adminView.adminHomePage')->withAdmin($user);
			$moduleTestDB = DB::table('moduleTests')
				->select('*')
				->get();
			return View::make('adminView.adminQuizEditor', compact('moduleTestDB'));
		} else {
			Auth::logout();
			return Redirect::action('AdminController@index');
		}
	}
	
	//admin controller to upate quiz questisons
	public function UpdateQuestion($questionID)
	{
		if(Auth::user()->admin == '1'){
			// $user = User::find($id);
			// return View::make('adminView.adminHomePage')->withAdmin($user);
			// $questionId = Input::get('modQuestions');
			// $question = Question::find($questionId);
			$val = Input::get('modQuestions');
			$questionData = DB::table('moduleTests')
				->select('*')
				->where('id', $val)
				->get();
				
			// return View::make('adminView.adminQuestionEdit', compact('id'));
			return View::make('adminView.adminQuestionEdit', compact('val'));
			
		} else {
			Auth::logout();
			return Redirect::action('AdminController@index');
		}
	}
	
	//route for immediate module results after submitting a quiz
	public function QuizResults($id){
		
		//NOTE: INCORECT ROUTES. NEEDS TO DRAW DATA FROM DB ^
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			return View::make('modulePagesView.quizResult')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	
	public function OverallResults($id){
		
		//NOTE: INCORECT ROUTES. NEEDS TO DRAW DATA FROM DB ^
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			return View::make('registeredUserView.overallResult')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	public function IndividualModule($id){
		
		//NOTE: INCORECT ROUTES. NEEDS TO DRAW DATA FROM DB ^
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			return View::make('registeredUserView.individualModuleResult')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	
	
}
