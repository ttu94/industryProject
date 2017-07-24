<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleTestsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moduleTests', function($table)
	 	{
	 		//primary key
	 		// $table->integer('id');
	 		$table->increments('id')->index();
	 		
	 		$table->string('moduleName');
	 		$table->string('question');
	 		
			//correct answers are verified by string comparison 
			$table->string('correctAnswer');
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
		Schema::drop('moduleTests');
	}

}
