<?php

class PictureController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /picture
	 *
	 * @return Response
	 */
	public function slideshow()
	{
		$pictures = Picture::all();
		return View::make('slideshow')
			->withPictures($pictures);
	}

	/**
	 * Display a listing of the resource.
	 * GET /picture
	 *
	 * @return Response
	 */
	public function index()
	{
		$people = Input::get('people');
		if (count($people)) {
			$pictures = Picture::whereHas('people', function($q) use ($people)
			{
				$q->whereIn('person_id', $people);

			})->get();
		} else {
			$pictures = Picture::all();
		}
		$family = Person::lists('name', 'id');
		return View::make('gallery')
			->withFamily($family)
			->withPictures($pictures);
	}
	
	/**
	 * Show the form for creating a new resource.
	 * GET /picture/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$family = Person::lists('name', 'id');
		return View::make('add-picture')->withFamily($family);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /picture
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$file = Input::file('file');

		if (! Input::hasFile('file'))
			return Redirect::back()->withErrors('No file has been selected');
		elseif (! $file->isValid())
			return Redirect::back()->withErrors('Invalid file');

		if (count($input['people']))
		{
			return Redirect::back()->withErrors('You didn\'t add any family members to it..');
		}

		$picture = new Picture;
		$picture->description = $input['description'];
		$picture->save();

		$destinationPath = public_path() . '/images/pictures/';

		$filename = $picture->id . '.jpg';

		$image = Image::make($file->getRealPath());

		$image->save($destinationPath . $filename);

		Flash::success('Your picture was added!');

		foreach($input['people'] as $personId) 
		{
			$picture->people()->attach($personId);
		}

		return Redirect::back();
	}

	/**
	 * Display the specified resource.
	 * GET /picture/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /picture/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$picture = Picture::with(['people' => function($q) {
			$q->lists('name', 'person_id');
		}])->find($id);
		$family = Person::lists('name', 'id');
		return View::make('edit-picture')
			->withPicture($picture)
			->withFamily($family);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /picture/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /picture/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}