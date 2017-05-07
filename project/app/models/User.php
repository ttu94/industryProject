<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');
	
	//
	
	// public static $rules = array (
	// 	'firstName' => 'required',
	// 	// 'lastName' => 'required',
	// 	// 'age' => 'required|digits_between:1,100',
	// 	// 'gender' => 'required',
	// 	// 'country' => 'required',
	// 	// 'email' => 'required|email|unique:users',
	// 	// 'password' => 'required|min:5'
	// 	);


}
