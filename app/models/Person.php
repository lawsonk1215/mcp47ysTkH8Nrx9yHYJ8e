<?php

class Person extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'people';

	/**
	 * The pictures this person is in
	 *
	 * @return Response
	 */
	public function pictures()
	{
		return $this->belongsToMany('Picture');
	}

}