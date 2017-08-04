<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userResults', function($table)
	 	{
	 		//Primary key
	 		$table->increments('id');
	 		
			//foreign key from users
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			
			//Module The results came from
			$table->string('moduleName');

			//stored user results from each module. Data is used to display information to the user
	 		$table->double('moduleResult');
	 		
	 		//timestamp each module when it updates
 			$table->timestamps();
 		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('userResults');
	}

}
