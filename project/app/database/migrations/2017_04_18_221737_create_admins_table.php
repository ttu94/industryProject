<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admins', function($table)
	 	{
	 		//Primary key
	 		$table->increments('id');
	 		
	 		$table->string('firstName');
	 		$table->string('lastName');
			$table->string('email')->unique();
			$table->string('password')->index();
			
			//timestamp each account when it is created
 			$table->timestamps();
 			$table->string('remember_token')->nullable;
 		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admins');
	}

}
