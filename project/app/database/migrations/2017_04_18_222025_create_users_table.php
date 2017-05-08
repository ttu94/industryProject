<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
			//Primary key
			$table->increments('id');
			
			//user attributes
			$table->string('firstName');
			$table->string('lastName');
			$table->integer('age')->unsigned();
			$table->string('gender');
			$table->string('country');
			$table->string('email')->unique();
			$table->string('password')->index();
			
			//user information
			$table->string('usertype');
			$table->string('injuryDate');
			$table->boolean('treatment')->nullable();
			$table->string('yesTreat');
			$table->boolean('clinicalTrial')->nullable();
			$table->boolean('physioTrial')->nullable();
			$table->boolean('onBehalf')->nullable();
			
			//timestamp each account when it is created
 			$table->timestamps();
 			$table->string('remember_token')->nullable();
 			
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
