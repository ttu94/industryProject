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
	 		$table->integer('id');
	 		
			// //foreign key from moduleResults table
			// $table->integer('moduleResult_id')->unsigned();
			// $table->foreign('moduleResult_id')->references('id')->on('moduleResults')->onDelete('cascade');
	 		
			// $table->integer('moduleAnswer_id')->unsigned();
			// $table->foreign('moduleAnswer_id')->references('id')->on('moduleAnswers')->onDelete('cascade');
	 		
	 		$table->string('moduleName');
	 		$table->string('question')->unique();
	 		
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
