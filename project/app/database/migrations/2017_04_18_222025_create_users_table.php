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
			
			//user information
			$table->string('usertype');
			$table->boolean('eligibleForTrial')->default(false);
			
			//Fields injuryDate, Treatment, yesTreat, clinicalTrial, physiotrial will ONLY appear if the user selects patient
			$table->string('injuryDate');
			$table->boolean('treatment')->nullable();
			$table->string('yesTreat');
			$table->boolean('clinicalTrial')->nullable();
			$table->boolean('physioTrial')->nullable();
			$table->boolean('onBehalf')->nullable();
			
			// status for if a user deactives account
			$table->boolean('status')->default(true);
			// status for admin
			$table->boolean('admin')->default(false);
			
			//timestamp each account when it is created
 			$table->timestamps();
			$table->string('password')->index();
 			$table->string('remember_token')->nullable();
 			
			//tailoring modules values
			$table->string('m1')->default("1");
			$table->string('m2')->default("1");
			$table->string('m3')->default("1");
			$table->string('m4')->default("1");
			$table->string('m5')->default("1");
			$table->string('m6')->default("1");
			$table->string('m7')->default("1");
			$table->string('m8')->default("1");
			$table->string('m9')->default("1");
			$table->string('m10')->default("1");
			$table->string('m11')->default("1");
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
