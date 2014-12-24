<?php

class Picture extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pictures';

	/**
	 * The people in this picture
	 *
	 * @return Response
	 */
	public function people()
	{
		return $this->belongsToMany('Person');
	}

}