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
	 * Store a newly created resource in storage.
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
			'firstName' => 'required|min:2',
			'lastName' => 'required',
			'age' => 'required|digits_between:1,100',
			'gender' => 'required',
			'country' => 'required',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:5',
			// 'password_confirmation' => 'required|min:5|same:password'
			);
		
		$v = Validator::make($input, $rules);
		// // dd($v);
		if ($v->passes()){
			$user = new User;
			$user->firstName = $input['firstName'];
			$user->lastName = $input['lastName'];
			$user->age = $input['age'];
			$user->gender = $input['gender'];
			$user->country = $input['country'];
			$user->email = $input['email'];
			$user->password = $encrypted;
			$user->usertype = $input['usertype'];
			
			$user->injuryDate = $input['injuryDate'];
			$user->treatment = $input['treatment'];
			$user->yesTreat = $input['yesTreat'];
			$user->clinicalTrial = $input['clinicalTrial'];
			$user->physioTrial = $input['physioTrial'];
			$user->onBehalf = $input['onBehalf'];
		
			$user->save();
			
			//Kyai i dont know how to route to userProfilePage with ID. It also might be convenient to log them in when they register
			return View::make('unregisterUserView.login');
			// return Redirect::action('UserController@show', array($user->id));
		 } else {
		 
			// Show Validation Errors. CURRENTLY WORKS
		 	return Redirect::to('register')->withInput()->withErrors($v);
		 }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//show the users profile
		// $user = User::find($id);
		// return View::make('registeredUserView.userProfilePage')->with($user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
	//USER LOGIN
	public function login() {
		$userdata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		
		// authenticate
		if (Auth::attempt($userdata)){
			return Redirect::to(URL::previous());
			// return Redirect::route('registeredUserView.userProfilePage');
		} else {
			return Redirect::to(URL::previous()) -> withInput();
		}
	}
	
	//USER LOGOUT
	public function logout() {
		Auth::logout();
		return Redirect::action('UserController@index');
	}


}
