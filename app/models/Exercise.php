<?php

class Exercise extends Eloquent {

	protected $table = 'exercises';

	protected $guarded = array();

	public static $rules = array();

	public function variables()
    {
        return $this->hasMany('Variable', 'exercise_id');
    }
}
