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

	//Route protection for account details
	public function AccountDetails($id)
	{
		$test = 0;
		if(Auth::check())
		{
			$user = User::find($id);
			return View::make('registeredUserView.accountDetails')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
		}
	}
	
	//Route protection for update details
	public function UpdateDetails($id)
	{
		if(Auth::check())
		{
			$user = User::find($id);
			return View::make('registeredUserView.updateDetails')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
		}
	}
	
	//Route protection for educational modules
	public function EducationModules()
	{
		if(Auth::check() && Auth::user()->status == 1)
		{
			return View::make('registeredUserView.educational')->withUser(Auth::user()->id);//educational.blade.php
		}else{
			//redirected to login page
			Auth::logout();
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for Quiz. INCOMPLETE
	public function ModuleQuiz($quizNo)
	{
		if(Auth::check())
		{
			$moduleTestDB = DB::table('moduleTests')
				->select('*')
				->where('moduleName', $quizNo)
				->get();
				
			$modADB = DB::table('moduleAnswers')
				->select('*')
				->get();
				
			$moduleAnswersDB = array();
			
			
			
				
				//work in progress
			// $moduleAnswersDB = DB::table('moduleAnswers')
			// 	->join('moduleTests', 'moduleAnswers.moduleTest_id', '=', 'moduleTests.id', 'left')
			// 	->select('*')
			// 	//->where('moduleAnswers.moduleTest_id', '=', 'moduleTests.id') //doesnt need the '=' cause it's default, for representation
			// 	->where('moduleTests.moduleName', '=', $quizNo)
			// 	->get();
				
			// return View::make('modulePagesView.moduleQuiz', ['quizNo' => $quizNo])->withUser(Auth::user()->id);//educational.blade.php
			return View::make('modulePagesView.moduleQuiz', compact('moduleTestDB', 'modADB', 'quizNo'))->withUser(Auth::user()->id);//educational.blade.php
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module one. INCOMPLETE
	public function ModuleQuizInfo($quizNo)
	{
		if(Auth::check())
		{
			
			return View::make('modulePagesView.moduleQuizInfo', ['quizNo' => $quizNo])->withUser(Auth::user()->id); //this passes the quiz module number e.g. Module 1
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
			return View::make('modulePagesView.modulePageOne')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module two
	public function ModuleTwoPage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageTwo')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module three
	public function ModuleThreePage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageThree')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module four
	public function ModuleFourPage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageFour')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module five
	public function ModuleFivePage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageFive')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module six
	public function ModuleSixPage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageSix')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module seven
	public function ModuleSevenPage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageSeven')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module eight
	public function ModuleEightPage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageEight')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module nine
	public function ModuleNinePage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageNine')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module ten
	public function ModuleTenPage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageTen')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	//Route protection for module eleven
	public function ModuleElevenPage()
	{
		if(Auth::check())
		{
			return View::make('modulePagesView.modulePageEleven')->withUser(Auth::user()->id);
		}else{
			//redirected to login page
			return Redirect::to('login');
			
		}
	}
	
	
	
}
