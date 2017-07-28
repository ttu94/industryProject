<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('accounts', function($table)
	 	{
	 		//auto incrementing primary key
 			$table->increments('id'); //accountID
 			
			//Foreign key, reference accounts_ID
			$table->integer('admin_id')->unsigned();
			$table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
 			
 			//foreign key, reference users_id
 			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

			$table->string('access_accLvl')->unsigned();
			$table->foreign('access_accLvl')->references('acclvl')->on('accessLevel')->onDelete('cascade');
 		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('accounts');
	}

}
