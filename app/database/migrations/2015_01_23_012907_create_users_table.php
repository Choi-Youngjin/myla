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
		Schema::create('users_login', function($table)
  		{
        		$table->increments('id');
     	   		$table->string('email')->unique();
        		$table->string('name');
        		$table->string('password');
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
		Schema::drop('users_login');
	}

}
