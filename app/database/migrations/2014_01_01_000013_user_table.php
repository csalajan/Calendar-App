<?php

use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Schema::create('auth_user', function($table){
		// 	$table->increments('id');
		// 	$table->string('name', 30);
			
		// 	// $table->unsignedInteger('second_idd');
		// 	// $table->foreign('second_idd')->references('user_id')->on('skill_user');
		// 	});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('user');
	}

}