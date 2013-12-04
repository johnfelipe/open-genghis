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
			$table->float('round');
			$table->float('error');
			$table->boolean('check');
			$table->timestamps();
		});
		Schema::create('variables', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('exercise_id');
			$table->foreign('exercise_id')->references('id')->on('exercises');
			$table->string('name');
			$table->float('min');
			$table->float('max');
			$table->float('step');
			$table->timestamps();
		});
		Schema::create('hints', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('exercise_id');
			$table->foreign('exercise_id')->references('id')->on('exercises');
			$table->string('text');
			$table->integer('order');
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
		Schema::drop('variables');
		Schema::drop('hints');
	}

}
