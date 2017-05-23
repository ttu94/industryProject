<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	return View::make('unregisterUserView/home');
});

Route::get('home', function()
{
	return View::make('unregisterUserView/home');
});

// SEARCH BAR
Route::get('search', function()
{
    //return View::make('registeredUserView/userProfilePage');
    return View::make('unregisterUserView/search');
});

// *******************************************************************************

//Route back to website home page
Route::get('home', array('as' => 'home', 'uses' => 'HomeController@index'));

// ROUTES CONTROLLER FOR ADMIN*************************************************************************************
Route::post('admin/login', array('as' => 'admin.login', 'uses' => 'AdminController@login'));
Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'AdminController@logout'));
Route::resource('admin', 'AdminController');

// //Route To admin login
Route::get('adminLogin', function()
{
    return View::make('adminView/adminLogin');
 
});

// //Route To admin homepage
Route::get('adminHomePage', function()
{
    return View::make('adminView/adminHomePage');
 
});

// ROUTES TO CONTrOLLER FOR USERS*********************************************************************************
Route::post('user/login', array('as' => 'user.login', 'uses' => 'UserController@login'));
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@logout'));
Route::resource('user', 'UserController');

//route for users premodule questionaire page
Route::get('{id}/premodule_questionaire', array('as' => 'premodule_questionaire', 'uses' => 'UserController@PremoduleQuestionaire'));

//route for users to update premodule questionaire page
Route::put('{id}/premodule_questionaire/update', array('as' => 'user.premodule', 'uses' => 'UserController@UserPremodule'));

//route for users to view account details
Route::get('{id}/account_details', array('as' => 'account_details', 'uses' => 'UserController@AccountDetails'));

//route for users to edit and update account details
Route::get('{id}/account_details/update_details', array('as' => 'update_details', 'uses' => 'UserController@UpdateDetails'));

//route for users to update password
Route::put('{id}/account_details/update_password', array('as' => 'update_password', 'uses' => 'UserController@UpdatePassword'));

//Route for immediate quiz results after submitting
Route::get('{id}/overall_results/module/insertmodulenumberhere/quiz_results', array('as' => 'quiz_results', 'uses' => 'UserController@QuizResults'));

//Route for getting overall results for a specific user
Route::get('{id}/overall_results', array('as' => 'overall_results', 'uses' => 'UserController@OverallResults'));

//Route for getting results for a specific module
Route::get('{id}/overall_results/module/insertmodulenumberhere', array('as' => 'individual_module', 'uses' => 'UserController@IndividualModule'));


//ROUTE CONTROLLER FOR PAGES***************************************************************************************
Route::resource('page', 'PageController');

//View make about us for quad header
Route::get('aboutUs', array('as' => 'about.us', 'uses' => 'PageController@AboutUs'));

//Vuew make contactus for quad header
Route::get('contactUs', array('as' => 'contact.us', 'uses' => 'PageController@ContactUs'));

//view make faq for quad header
Route::get('faq', array('as' => 'faq', 'uses' => 'PageController@Faq'));

//view make abstractmodule for quad header
Route::get('abstractModule', array('as' => 'abstract.module', 'uses' => 'PageController@AbstractModule'));

//Route protection for account details
Route::get('account_details', array('as' => 'account.details', 'uses' => 'PageController@AccountDetails'));

//Route protection for account details
Route::get('update_details', array('as' => 'update.details', 'uses' => 'PageController@updateDetails'));

//Route protection for educational module
Route::get('education_modules', array('as' => 'education_modules', 'uses' => 'PageController@EducationModules'));

//Route for quiz information before it begins
Route::get('educational_module/quiz_information', array('as' => 'module_quiz_info', 'uses' => 'PageController@ModuleQuizInfo'));

//Route protection for module quizzes, all quizzes wil use this template
Route::get('educational_module/quiz/modulenamehere', array('as' => 'module_quiz', 'uses' => 'PageController@ModuleQuiz'));

// MODULE PAGES*********************************************************************************************************************************
// *************************************************************************************************************************************************

//Route protection for module one page
Route::get('educational_module/module_one', array('as' => 'module_one', 'uses' => 'PageController@ModuleOnePage'));

//Route protection for module two page
Route::get('educational_module/module_two', array('as' => 'module_two', 'uses' => 'PageController@ModuleTwoPage'));

//Route protection for module three page
Route::get('educational_module/module_three', array('as' => 'module_three', 'uses' => 'PageController@ModuleThreePage'));

//Route protection for module four page
Route::get('educational_module/module_four', array('as' => 'module_four', 'uses' => 'PageController@ModuleFourPage'));

//Route protection for module five page
Route::get('educational_module/module_five', array('as' => 'module_five', 'uses' => 'PageController@ModuleFivePage'));

//Route protection for module six page
Route::get('educational_module/module_six', array('as' => 'module_six', 'uses' => 'PageController@ModuleSixPage'));

//Route protection for module seven page
Route::get('educational_module/module_seven', array('as' => 'module_seven', 'uses' => 'PageController@ModuleSevenPage'));

//Route protection for module eight page
Route::get('educational_module/module_eight', array('as' => 'module_eight', 'uses' => 'PageController@ModuleEightPage'));

//Route protection for module nine page
Route::get('educational_module/module_nine', array('as' => 'module_nine', 'uses' => 'PageController@ModuleNinePage'));

//Route protection for module ten page
Route::get('educational_module/module_ten', array('as' => 'module_ten', 'uses' => 'PageController@ModuleTenPage'));

//Route protection for module eleven page
Route::get('educational_module/module_eleven', array('as' => 'module_eleven', 'uses' => 'PageController@ModuleElevenPage'));

// UNREGISTERED USERS ROUTES***************************************************
// *****************************************************************************

//Route To Login In
Route::get('login', function()
{
    return View::make('unregisterUserView/login');
});

Route::get('logoutPage', function()
{
    return View::make('unregisterUserView/logoutPage');
});

//Route to Register user
Route::get('register', function()
{
    return View::make('unregisterUserView/register');
});

//Route to About Us page
Route::get('aboutUs', function()
{
    return View::make('unregisterUserView/aboutUs');
 
});

//Route to contact us page
Route::get('contactUs', function()
{
    return View::make('unregisterUserView/contactUs');
 
});

//Route to faq page
Route::get('faq', function()
{
    return View::make('unregisterUserView/faq');
 
});

//Route To abstract module.
Route::get('abstractModule', function()
{
    return View::make('unregisterUserView/abstractModule');
 
});

//Route To forgetten password page
Route::get('forgottenPassword', function()
{
    return View::make('unregisterUserView/forgetPassword');
 
});
