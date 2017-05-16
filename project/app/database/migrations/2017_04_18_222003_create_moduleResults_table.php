<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moduleResults', function($table)
	 	{
	 		//Primary key
	 		$table->increments('id');
	 		
			//foreign key from userResult table
			$table->integer('userResult_id')->unsigned();
			$table->foreign('userResult_id')->references('id')->on('userResults')->onDelete('cascade');
			
			$table->string('chosenAnswer');
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
		Schema::drop('moduleResults');
	}

}
