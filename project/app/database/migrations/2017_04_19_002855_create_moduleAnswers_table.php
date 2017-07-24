<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moduleAnswers', function($table)
		{
			// $table->integer('id')->index(); //this is the question number from table moduleTest
			$table->increments('id')->index();
			
	 		//foreign key from moduleAnswer
	 		$table->integer('moduleTest_id');
			$table->foreign('moduleTest_id')->references('id')->on('moduleTests')->onDelete('cascade');
			
			$table->string('set'); //this is new, because of the new client needs, random from sets of question
			$table->string('answer');
			// $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('moduleAnswers'); //this deletes the moduleAnswer table
	}

}
