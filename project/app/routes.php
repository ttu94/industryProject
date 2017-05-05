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

Route::resource('admin', 'AdminController');

// SEARCH BAR
Route::get('search', function()
{
    //return View::make('registeredUserView/userProfilePage');
    return View::make('unregisterUserView/search');
});


// UNREGISTERED USERS ROUTES***************************************************
// *****************************************************************************

//Route To Login In
Route::get('login', function()
{
    //return View::make('registeredUserView/userProfilePage');
    return View::make('unregisterUserView/login');
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

// REGISTERD USERS ROUTES***************************************************
// *****************************************************************************

//Route To User PAGe NOTE: INCOMPLETE ITS A DUMMY RN
Route::get('signIn', function()
{
    return View::make('registeredUserView/userProfilePage');
 
});

//Route To education module.
// NOTE: USER NEEDS TO BE SIGNED IN ***********
Route::get('educationalModules', function()
{
    return View::make('registeredUserView/educational');
 
});

//Route To module page One
// NOTE: USER NEEDS TO BE SIGNED IN ***********
Route::get('modulePageOne', function()
{
    return View::make('registeredUserView/modulePageOne');
 
});

