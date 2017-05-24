<?php

class AdminController extends \BaseController {

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
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//show the admin profile
		if(Auth::user()->id == $id){
			$admin = Admin::find($id);
			return View::make('adminView.adminHomePage')->withAdmin($admin);
		} else {
			Auth::logout();
			return Redirect::action('AdminController@index');
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
	
	//admin
	public function login() {

		$admindata = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		
		// authenticates and sets remember me cookie
		if (Auth::attempt($admindata, true))
		{
			return Redirect::action('AdminController@show', array(Auth::user()->id));
		} else {
			// return Redirect::to(URL::previous()) -> withInput();
			return Redirect::back()->with('invalid', 'The username or password is incorrect.');
		}
		 
	}


}
