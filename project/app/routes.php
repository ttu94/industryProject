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
Route::resource('admin', 'AdminController');

// ROUTES TO CONTrOLLER FOR USERS*********************************************************************************
Route::post('user/login', array('as' => 'user.login', 'uses' => 'UserController@login'));
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@logout'));
Route::resource('user', 'UserController');

//route for users to view account details
Route::get('{id}/account_details', array('as' => 'account_details', 'uses' => 'UserController@AccountDetails'));

//route for users to edit and update account details
Route::get('{id}/account_details/update_details', array('as' => 'update_details', 'uses' => 'UserController@UpdateDetails'));

//route for users to update password
Route::put('{id}/account_details/update_password', array('as' => 'update_password', 'uses' => 'UserController@UpdatePassword'));

//Route for getting results for a specific user
Route::get('{id}/overall_results', array('as' => 'overall_results', 'uses' => 'UserController@OverallResults'));

//Route for getting results for a specific user
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

//Route for quiz
Route::get('educational_module/quiz/insertmodulenamehere', array('as' => 'module_quiz', 'uses' => 'PageController@ModuleQuiz'));

//Route protection for module one page
Route::get('educational_module/module_one', array('as' => 'module_one', 'uses' => 'PageController@ModuleOnePage'));



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

//Route To admin login
Route::get('adminLogin', function()
{
    return View::make('unregisterUserView/adminLogin');
 
});

