<?php

class UserController extends \BaseController {
	
	//Loads Home Page
	public function index()
	{
		return View::make('unregisterUserView.home');
	}


	//Loads Register view
	public function create()
	{
		return View::make('unregisterUserView.register');
	}
	
	//User enquiry, sends an email to sip.cjcnscr@gmail.com
	public function UserEnquiries()
	{
		$input = Input::all();

		//sends an email to sip.cjcnscr@gmail.com when a user submits an enquiry
		Mail::send('emails.enquiries', array('contactName'=>Input::get('contactName'), 'contactEmail'=>Input::get('contactEmail'), 'contactComment'=>Input::get('contactComment')), function($message){
			$message->to('sip.cjcnscr@gmail.com')->subject(Input::get('contactSubject'));
		});

		return Redirect::action('PageController@ContactUs')->with('success', 'Thank you for your enquiry, we will get back in touch with you as soon as we can!');
	}

	//User feedback, sends an email to sip.cjcnscr@gmail.com
	public function UserFeedback()
	{
		$input = Input::all();

		//sends an email to sip.cjcnscr@gmail.com when a user submits feedback
		Mail::send('emails.feedback', array('feedbackName'=>Input::get('feedbackName'), 'feedbackEmail'=>Input::get('feedbackEmail'), 'feedback'=>Input::get('feedback'), 'star'=>Input::get('star')), function($message){
			$message->to('sip.cjcnscr@gmail.com')->subject('Feedback');
		});

		return Redirect::action('PageController@ContactUs')->with('success', 'Thank you for your feedback. We cannot personally respond, but please know that your message has been received.');
	}

	//Creates and store new users
	public function store()
	{
		$input = Input::all();
		
		//Encrypts password
		$password = $input['password'];
		$encrypted = Hash::make($password);
		
		//Validation rules
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
    		
    		//Premodule page can only be accessed immediately after registration
			return Redirect::action('UserController@PremoduleQuestionaire', array($user->id));
		 } else {
			// If errors occur redirect back and show validation errors
		 	return Redirect::back()->withInput()->withErrors($v);
		 }
	}

	//Route to bring up the premodule questionaire page
	public function PremoduleQuestionaire($id)
	{
		//show the users profile
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			return View::make('registeredUserView.preQuestion')->withUser(Auth::user()->id);
			// return View::make('registeredUserView.userProfilePage')->withUser($user);
		} else {
			Auth::logout();
			return Redirect::to('login')->with('error', 'You must be signed to have access');
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
		
		//UserController@show loads up user homepage
		return Redirect::action('UserController@show', array($user->id));
	}
	
	//Loads up user homepage
	public function show($id)
	{
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			
			//retrives information regarding user status with the quiz
			$userResultsDB = DB::table('userResults')
				->select('*')
				->where('user_id', '=', $id)
				->where('moduleResult', '>=', 0.8)
				->groupby('moduleName')
				->get();
			
			$passCount = count($userResultsDB);
			$latest; $passLatest;
			
			if($passCount == 0){
				$latest = "";
				$passLatest = "";
			} else {
				$latest = end($userResultsDB);
				$passLatest = $latest->created_at;
			}
			
			return View::make('registeredUserView.userProfilePage', compact('passCount', 'passLatest'))->withUser($user);
		} else {
			Auth::logout();
			return Redirect::to('login')->with('error', 'You must be signed to have access');
		}
	}

	//Loads up update view
	public function UpdateDetails($id){
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			return View::make('registeredUserView.updateDetails')->withUser($user);
		} else {
			Auth::logout();return Redirect::to('login')->with('error', 'You must be signed to have access');
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
				// Redirect back and shows validation errors
			 	return Redirect::back()->withInput()->withErrors($v);
			 }
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	//Route: update_password. Drop down menu when user clicks "Change Password"
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
	
	//user deactivation route. Change status to 0 and logs out
	public function destroy($id)
	{
		$user = User::find($id);

		//Deactivates the account, logs them out and sends an email notification
		Auth::user()->status = 0;
		
		//Sends an email to the user with a deactivation email
		Mail::send('emails.deactivation', array('firstName'=>Input::get('firstName')), function($message){
			$message->to(Auth::user()->email)->subject('Account Deactivation');
		});
		
		Auth::logout();
		return Redirect::to('deactivationPage');
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
	
	//account reactivtion button route. Changes status to 1 and redirects to user homepage
	public function AccountReactivation($id){

		$user = User::find($id);
		$input = Input::all();
		
		$user->status = 1;
		$user->save();
		
		Mail::send('emails.activation', array('firstName'=>Input::get('firstName')), function($message){
			$message->to(Auth::user()->email)->subject('Account Activated');
		});
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
	
	//admin login. Checks if user is an admin.
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
			$numberUsers = User::select('*')->count();
			$deativatedUsers = User::where(['status' => 0])->get()->count();
			$eligibleUsers = User::where(['eligibleForTrial' => 1])->get()->count();
			
			return View::make('adminView.adminHomePage', compact("numberUsers","deativatedUsers", "eligibleUsers"));
		} else {
			Auth::logout();
			return Redirect::action('AdminController@index');
		}
	}
	
	//thuans experimental routes, admin quiz editor
	public function AdminQuizEditor($id)
	{
		if(Auth::user()->admin == '1'){
			$user = User::find($id);
			$moduleTestDB = DB::table('moduleTests')
				->select('*')
				->get();
			return View::make('adminView.adminQuizEditor', compact('moduleTestDB'))->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('AdminController@index');
		}
	}
	
	//admin controller to update quiz questisons
	public function EditQuestion($id)
	{
		if(Auth::user()->admin == '1'){
			$user = User::find($id);
			$val = Input::get('modQuestions');
			// $moduleNo = Input::get('moduleNo');
			
			$moduleTestDB = DB::table('moduleTests')
				->select('*')
				->where('id', $val)
				->get();
				
			$moduleAnswersDB = DB::table('moduleAnswers')
				->select('*')
				->where('moduleAnswers.moduleTest_id', '=', $val)
				->get();
			
			// return View::make('adminView.adminQuestionEdit', compact('id'));
			return View::make('adminView.adminQuestionEdit', compact('val', 'moduleAnswersDB', 'moduleTestDB'))->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	public function AddQuestion($id)
	{
		if(Auth::user()->admin == '1'){
			$user = User::find($id);
			// return View::make('adminView.adminQuestionEdit', compact('id'));
			return View::make('adminView.adminQuestionAdd')->withUser($user);
			// return Redirect::action('UserController@index');
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	public function UpdateQuestion($id)
	{
		if(Auth::user()->admin == '1'){
			$user = User::find($id);
				
			$uinput = Input::all();
			DB::table('moduleTests')
				->where('id', '=', $uinput['mtID'])
				->update(['question' => $uinput['question'], 'correctAnswer' => $uinput['correctAnswer']]);
			for($i=1;$i<=4;$i++){
				$maID = 'maID'.$i;
				$ans = 'answer'.$i;
				DB::table('moduleAnswers')
					->where('id', '=', $uinput[$maID])
					->update(['answer' => $uinput[$ans]]);
			}
			
			$moduleTestDB = DB::table('moduleTests')
				->select('*')
				->get();
			
			// return View::make('adminView.tempPage')->withUser($user);
			return View::make('adminView.adminQuizEditor', compact('moduleTestDB'))->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	public function NewQuestion($id)
	{
		if(Auth::user()->admin == '1'){
			$user = User::find($id);
			
			$uinput = Input::all();
			$val = Input::get('moduleTitle');
			// $id = DB::table('users')->insertGetId(
			// 		    ['email' => 'john@example.com', 'votes' => 0]
			// 		);
			
			$mtID = DB::table('moduleTests')
				->insertGetId([
						'moduleName' => $val, 
						'question' => $uinput['question'], 
						'correctAnswer' => $uinput['correctAnswer'],
						'created_at' =>  \Carbon\Carbon::now(),
	            		'updated_at' => \Carbon\Carbon::now()
            		]);
			
				// ->where('id', '=', $uinput['mtID'])
				// ->update(['question' => $uinput['question'], 'correctAnswer' => $uinput['correctAnswer']]);
			for($i=1;$i<=4;$i++){
				$maID = 'maID'.$i;
				$ans = 'answer'.$i;
				$maID = DB::table('moduleAnswers')
				->insertGetId([
						'moduleTest_id' => $mtID,
						'set' => 'q'.$mtID,
						'answer' => $uinput[$ans]
					]);
				// DB::table('moduleAnswers')
				// 	->where('id', '=', $uinput[$maID])
				// 	->update(['answer' => $uinput[$ans]]);
			}
				
			$moduleTestDB = DB::table('moduleTests')
				->select('*')
				->get();
				
			// return View::make('adminView.tempPage')->withUser($user);
			return View::make('adminView.adminQuizEditor', compact('moduleTestDB'))->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	public function DeleteQuestion($id)
	{
		if(Auth::user()->admin == '1'){
			$user = User::find($id);
			
			$uinput = Input::all();
			DB::table('moduleTests')
				->where('id', '=', $uinput['mtID'])
				->delete();
			DB::table('moduleAnswers')
				->where('moduleTest_id', '=', $uinput['mtID'])
				->delete();
				
			$moduleTestDB = DB::table('moduleTests')
				->select('*')
				->get();
				
			// return View::make('adminView.tempPage')->withUser($user);
			return View::make('adminView.adminQuizEditor', compact('moduleTestDB'))->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	//route for immediate module results after submitting a quiz
	public function QuizResults($id){
		
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			$allQuestions = array(); //All Question from DB
			$allAnswers = array(); //All Anwers from DB
			$userAnswer = array(); //All Answers the User gave in Quiz
			$usedID = array();
			$subA = array();
			$count = 0;
			$quizNo; $uRcount;
			
			$moduleTestDB = DB::table('moduleTests')
				->select('id','question', 'correctAnswer')
				->get();
			
			$submittedAnswers = Input::all();
			
			foreach($moduleTestDB as $moduleTestDB){
				$allAnswers[$moduleTestDB->id] = (string)$moduleTestDB->correctAnswer;
				$allQuestions[$moduleTestDB->id] = (string)$moduleTestDB->question;
				$count++;
			};	
			$correct = 0;
			$index = 0;
			foreach($submittedAnswers as $k=>$a){ //$k is an id
				if($k === 'quizNo'){
					$quizNo = $a;
				} elseif($k === 'uRcount'){
					$uRcount = $a;
				}
				foreach($allAnswers as $q=>$ca){ //$q should be also and id
					if($k === $q){
						if($a == $ca){
							$subA[$index-4] = "Right";
							$correct++;
						} else {
							$subA[$index-4] = "Wrong";
						}
						$userAnswer[$allQuestions[$k]] = $a;
						$usedID[] = $k;
					}
				}
				$index++;
			}
			
			$uRrecount = DB::table('userResults')->count();
			if($uRcount == $uRrecount){
				$result = $correct/($index-4);
				DB::table('userResults')->insertGetId(
				    ['user_id' => $id, 
				    'moduleName' => $quizNo, 
				    'moduleResult' => $result,
				    'created_at' => \Carbon\Carbon::now(), //this is to get the date and time of now (timestamping)
				    'updated_at' => \Carbon\Carbon::now()]
				);
			}
			$moduleAnswersDB = DB::table('moduleAnswers')
				->join('moduleTests', 'moduleAnswers.moduleTest_id', '=', 'moduleTests.id')
				->select('*')
				->where('moduleTests.moduleName', '=', $quizNo)
				->get();
				
			return View::make('modulePagesView.quizResult', compact('userAnswer', 'moduleAnswersDB', 'usedID', 'quizNo', 'id', 'result', 'subA', 'index', 'correct'))->withUser($user);
			// return View::make('modulePagesView.quizResult', compact('uRrecount', 'uRcount', 'quizNo'))->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	
	public function OverallResults($id){
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			
			$userResultsDB = DB::table('userResults')
				->select('*')
				->where('user_id', '=', $id)
				// ->latest()
				->get();
			
			$userResultsPassDB = DB::table('userResults')
				->select('*')
				->where('user_id', '=', $id)
				->where('moduleResult', '>=', 0.8)
				->groupBy('moduleName')
				->get();
				
			$passCount = count($userResultsPassDB);
			$latest; $passLatest;
			
			if($passCount == 0){
				$latest = "";
				$passLatest = "";
			} else {
				$latest = end($userResultsPassDB);
				$passLatest = $latest->created_at;
			}
	
			return View::make('registeredUserView.overallResult', compact('userResultsDB', 'passCount'))->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	public function IndividualModule($id, $moduleNo){
		if(Auth::user()->id == $id && Auth::user()->status == 1){
			$user = User::find($id);
			
			$userResultsDB = DB::table('userResults')
				->select('*')
				->where('user_id', '=', $id)
				->where('moduleName', '=', $moduleNo)
				->latest()
				->get();
			
			return View::make('registeredUserView.individualModuleResult', compact('moduleNo', 'userResultsDB'))->withUser($user);
		} else {
			Auth::logout();
			return Redirect::action('UserController@index');
		}
	}
	
	
	
}
