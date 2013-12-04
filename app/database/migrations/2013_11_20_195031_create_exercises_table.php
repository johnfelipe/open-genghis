<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExercisesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exercises', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('statement');
			$table->string('solution');
			$table->double('round');
			$table->double('error');
			$table->int('check');
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
		Schema::drop('exercises');
	}

}
