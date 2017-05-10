<?php

class PageController extends \BaseController {

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
	
	public function AboutUs()
	{
		return View::make("unregisterUserView.aboutUs");
	}
	
	public function Faq()
	{
		return View::make("unregisterUserView.faq");
	}
	
	public function AbstractModule()
	{
		return View::make("unregisterUserView.abstractModule");
	}
	
	public function ContactUs()
	{
		return View::make("unregisterUserView.contactUs");
	}
	
	//Route protection for educational modules
	public function EducationModules()
	{
		if(Auth::check())
		{
			return View::make('registeredUserView.educational')->withUser(Auth::user()->id);//educational.blade.php
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for account details
	public function AccountDetails($id)
	{
		if(Auth::check())
		{
			$user = User::find($id);
			return View::make('registeredUserView.accountDetails')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
		}
	}

	//Route protection for module one
	public function ModuleOnePage()
	{
		if(Auth::check())
		{
			return View::make('registeredUserView.modulePageOne')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	public function Results()
	{
		$user = Auth::user();
		$results = Results::where('user_id', '==', $user->id)->get();
		// return View::make()->withResults($results);
	}


}
