<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		return View::make('registeredUserView.userProfilePage');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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


}
