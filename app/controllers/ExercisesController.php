<?php

class ExercisesController extends BaseController {

	/**
	 * List all the exercises.
	 *
	 * @return Response
	 */
	public function index()
	{
		$exercises = Exercise::all();

		return View::make('exercises.index')
		->with('exercises', $exercises);
	}

	/**
	 * Initiates a new exercise in the DB and passes it to the show() function.
	 *
	 * @return Response
	 */
	public function create()
	{
		$newExercise = new Exercise;
		$newExercise->title = "New exercise";
		$newExercise->save();
		$url = URL::action('ExercisesController@show', $newExercise->id);
		return Redirect::to($url);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$exercise = Exercise::find($id);
		return View::make('exercises.show')->with('exercise', $exercise);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('exercises.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$exercise = Exercise::find($id);
		$exercise->title = "";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$exercise = Exercise::destroy($id);
	}

}
