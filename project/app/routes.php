<?php

// ----------------------------//
//       Table of Content
// ----------------------------//

    // 1.0 Admin Routes - Line 12
    // 2.0 User Routes - Line 38
    // 3.0 Page Routes - Line 78
    //   3.1 Route Protection - Line 144
    // 4.0 Quiz Routes - Line 212
    // 5.0 Password Password - Line 226

// Route back to website home page
Route::get('/', function()
{
	return View::make('unregisterUserView/home');
});

Route::get('home', array('as' => 'home', 'uses' => 'HomeController@index'));

// ----------------------------//
//     1.0 Admin Routes        //
// ----------------------------//

Route::resource('admin', 'AdminController');

// Route To admin login page
Route::get('adminLogin', function()
{
    return View::make('adminView/adminLogin');
 
});

// Route for admin homepage
Route::get('adminHomePage', array('as' => 'admin.homepage', 'uses' => 'UserController@AdminShow'));

// Route to quiz editor page
Route::get('adminHomePage/adminQuizEditor/{id}', array('as' => 'admin_quiz_editor', 'uses' => 'UserController@AdminQuizEditor'));

// Route for editing specific question
Route::put('adminHomePage/adminQuizEditor/question/{id}', array('as' => 'edit_question', 'uses' => 'UserController@EditQuestion'));

// Route for adding new Questions
Route::get('adminHomePage/adminQuizEditor/add/{id}', array('as' => 'adminAddQuestion', 'uses' => 'UserController@AddQuestion'));

// Updating the specific question
Route::put('adminHomePage/adminQuizEditor/updateQuesiton/{id}', array('as' => 'update_question', 'uses' => 'UserController@UpdateQuestion'));

// Adding a new question
Route::put('adminHomePage/adminQuizEditor/newQuestion/{id}', array('as' => 'new_question', 'uses' => 'UserController@NewQuestion'));

// Delete a question
Route::delete('adminHomePage/adminQuizEditor/{id}', array('as' => 'delete_question', 'uses' => 'UserController@DeleteQuestion'));


// ----------------------------//
//     2.0 User Routes         //
// ----------------------------//

// Route to log in and log out for users
Route::post('user/login', array('as' => 'user.login', 'uses' => 'UserController@login'));
Route::get('user/logout', array('as' => 'user.logout', 'uses' => 'UserController@logout'));
// Admin login
Route::post('admin/login', array('as' => 'admin.login', 'uses' => 'UserController@AdminLogin'));

Route::resource('user', 'UserController');

// Route for generating reactivation page
Route::get('{id}/reactivating_account', array('as' => 'reactivating.account', 'uses' => 'UserController@ReactivateAccount'));

// Button for users to reactivate on the reactivation page
Route::put('{id}/account_reactivation', array('as' => 'account.reactivation', 'uses' => 'UserController@AccountReactivation'));

// Route for users premodule questionaire page
Route::get('{id}/premodule_questionaire', array('as' => 'premodule_questionaire', 'uses' => 'UserController@PremoduleQuestionaire'));

// Route for users to update premodule questionaire page
Route::put('{id}/premodule_questionaire/update', array('as' => 'user.premodule', 'uses' => 'UserController@UserPremodule'));

// Route for users to view account details
Route::get('{id}/account_details', array('as' => 'account_details', 'uses' => 'UserController@AccountDetails'));

// Route for users to edit and update account details
Route::get('{id}/account_details/update_details', array('as' => 'update_details', 'uses' => 'UserController@UpdateDetails'));

// Route for users to update password
Route::put('{id}/account_details/update_password', array('as' => 'update_password', 'uses' => 'UserController@UpdatePassword'));

// Route for getting overall results for a specific user
Route::get('{id}/overall_results', array('as' => 'overall_results', 'uses' => 'UserController@OverallResults'));

// Route for getting results for a specific module
Route::get('{id}/overall_results/module/{moduleNo}', array('as' => 'individual_module', 'uses' => 'UserController@IndividualModule'));


// ----------------------------//
//     3.0 Page Controls       //
// ----------------------------//

Route::resource('page', 'PageController');

// Route To Login In
Route::get('login', function()
{
    return View::make('unregisterUserView/login');
});

// Route to Logout Page
Route::get('logoutPage', function()
{
    return View::make('unregisterUserView/logoutPage');
});

// Route to Deactivation Page
Route::get('deactivationPage', function()
{
    return View::make('unregisterUserView/deactivationPage');
});

// Route to Register user
Route::get('register', function()
{
    return View::make('unregisterUserView/register');
});

// Route to About Us page
Route::get('aboutUs', function()
{
    return View::make('unregisterUserView/aboutUs');
 
});

// Route to contact us page
Route::get('contactUs', function()
{
    return View::make('unregisterUserView/contactUs');
 
});

// Route to faq page
Route::get('faq', function()
{
    return View::make('unregisterUserView/faq');
 
});

// Route To abstract module.
Route::get('abstractModule', function()
{
    return View::make('unregisterUserView/abstractModule');
 
});

// Route To forgetten password page
Route::get('forgottenPassword', function()
{
    return View::make('unregisterUserView/forgetPassword');
 
});


// ------------------------------//
//    3.1 Route Protection       //
// ------------------------------//
//Can only be accessed by registered users

//View make about us for quad header
Route::get('aboutUs', array('as' => 'about.us', 'uses' => 'PageController@AboutUs'));

//Vuew make contactus for quad header
Route::get('contactUs', array('as' => 'contact.us', 'uses' => 'PageController@ContactUs'));

//route for user enquiries
Route::post('enquiries', "UserController@UserEnquiries");

//route for user feedback
Route::post('contactUs', "UserController@UserFeedback");

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


// ----------------------------//
//     4.0 Quiz Routes         //
// ----------------------------//

//Route for quiz information before it begins
Route::get('educational_module/quiz_information/{quizNo}', array('as' => 'module_quiz_info', 'uses' => 'PageController@ModuleQuizInfo')); 

//Route protection for module quizzes, all quizzes wil use this template
Route::get('{id}/educational_module/quiz/{quizNo}', array('as' => 'module_quiz', 'uses' => 'PageController@ModuleQuiz'));

//route for submitted quiz questions
Route::get('{id}/educational_module/quiz_results', array('as' => 'quiz_results', 'uses' => 'UserController@QuizResults'));


// -----------------------------------//
//  5.0 Password Recovery Routes      //
// -----------------------------------//

Route::post('password_recovery', "RemindersController@postRemind");
Route::controller('password', 'RemindersController');


